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
foreach ($data as $item):
?>
<div class="plant_item">
	<div class="plant_image">
		<?php
			if ($item->image != "") {
				echo '<img src="' . base_url() . 'img/plants/' . $item->image . '"></img>';
			}
		?>
	</div>
	<div class="plant_title">
	<?php echo $item->title ?>
	</div>
	<div class="plant_content">
	<?php echo $item->content ?>
	</div>
	<div class="plant_links">
	<?php echo $item->links ?>
	</div>
	<?php if ($this->session->userdata('logged_in')): ?>
	<div class="plant_edit">
	<?php echo anchor(array('plants', 'edit', $item->id), 'Edit'); ?>
	</div>
	<?php endif; ?>
</div>
<?php
endforeach;
?>
<?php if ($this->session->userdata('logged_in')): ?>
<div class="plant_item">
	<div class="plant_new">
	<?php echo anchor(array('plants', 'edit', 'new'), 'Add New'); ?>
	</div>
</div>
<?php endif; ?>
</div>