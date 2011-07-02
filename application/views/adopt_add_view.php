<div style="text-align: center;">
<?php
$this->load->helper('form');

echo form_open('adopt/add/submit', '', array('id' => $id));

echo "Adding Garden Plant # " . $id . "...";

echo '<br /><br />';

echo form_label('Plant Type', 'plant_type_id');
echo '<br />';

$options = array('default' => 'Select a type:');
foreach ($plants as $item) {
	$options[$item->id] = $item->title;
}
echo form_dropdown('plant_type_id', $options, 'default');

echo '<br /><br />';
echo form_submit('submit', 'Add');
echo form_close();
?>
</div>