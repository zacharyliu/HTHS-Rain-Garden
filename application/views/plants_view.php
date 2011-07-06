<style type="text/css">
#plants_wrapper table {
	width: 100%;
}
</style>
<?php $this->load->view('plant_info_view_style'); ?>
<div id="plants_wrapper">
<?php
$this->load->helper('url');
$table_data = array();
foreach ($data as $item) {
	$plant = array();
	foreach ($item as $key=>$value) {
		$plant[$key] = $value;
	}
	$table_data[] = $this->load->view('plant_info_view', $plant, true);
}

$this->load->library('table');
$table_data = $this->table->make_columns($table_data, 2);

$template = array(
	'cell_start' => '<td align="center" valign="top">',
	'cell_alt_start' => '<td align="center" valign="top">',
);
$this->table->set_template($template);

echo $this->table->generate($table_data);
?>
<?php if ($this->session->userdata('logged_in')): ?>
<div class="plant_item" style="width: 300px; margin-left: auto; margin-right: auto;">
	<div class="plant_new">
	<?php echo anchor(array('plants', 'edit', 'new'), 'Add New'); ?>
	</div>
</div>
<?php endif; ?>
</div>