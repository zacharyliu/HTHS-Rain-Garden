<style type="text/css">
.plant_item {
	margin-bottom: 10px;
	background-color: #DDD;
	padding: 10px;
}
</style>

<div id="plants_wrapper">
<?php
foreach ($data as $item):
?>
<div class="plant_item">
	<div class="plant_title">
	<?php echo $item->title ?>
	</div>
	<div class="plant_content">
	<?php echo $item->content ?>
	</div>
	<div class="plant_links">
	<?php echo $item->links ?>
	</div>
</div>
<?php
endforeach;
?>
</div>