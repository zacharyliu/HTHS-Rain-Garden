<div style="text-align: center;">
<?php
$this->load->helper('form');

echo form_open('adopt/add/submit', '', array('id' => $id));
echo form_label('Plant Type ID', 'plant_type_id');
echo '<br />';
echo form_input(array('name' => 'plant_type_id', 'id' => 'plant_type_id'));
echo '<br /><br />';
echo form_submit('submit', 'Add');
echo form_close();
?>
</div>