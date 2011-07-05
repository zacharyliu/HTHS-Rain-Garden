<style type="text/css">
/*#plants_wrapper {
	overflow: auto;
}*/
.plant_item {
	margin-bottom: 10px;
	background-color: black;
	color: white;
	padding: 12px;
	width: 300px;
	
	box-shadow: 0 0 40px gray;
	-webkit-box-shadow: 0 0 40px gray;
	-moz-box-shadow: 0 0 40px gray;
	-o-box-shadow: 0 0 40px gray;
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	border: 5px solid white;
}
.plant_item div {
	margin-bottom: 0.5em;
}
.plant_item div:last-child {
	margin-bottom: 0;
}
.plant_item a {
	color: white;
}

.plant_title {
	font-family: 'Georgia', serif;
	font-size: 1.1em;
}

#plants_wrapper table {
	width: 100%;
}
</style>

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
<div class="plant_item" style="width: 100%;">
	<div class="plant_new">
	<?php echo anchor(array('plants', 'edit', 'new'), 'Add New'); ?>
	</div>
</div>
<?php endif; ?>
</div>