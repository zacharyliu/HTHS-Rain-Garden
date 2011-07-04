<style type="text/css">
.plant_item {
	margin-bottom: 10px;
	background-color: #DDD;
	padding: 10px;
}
</style>

<div id="plants_wrapper">
<?php
$this->load->helper('url');
foreach ($data as $item) {
	$plant = array();
	foreach ($item as $key=>$value) {
		$plant[$key] = $value;
	}
	$this->load->view('plant_info_view', $plant);
}
?>
<?php if ($this->session->userdata('logged_in')): ?>
<div class="plant_item">
	<div class="plant_new">
	<?php echo anchor(array('plants', 'edit', 'new'), 'Add New'); ?>
	</div>
</div>
<?php endif; ?>
</div>