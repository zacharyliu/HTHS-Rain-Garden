<?php
$this->load->helper('url');
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?>HTHS Rain Garden</title>
	<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.2.js"></script>
</head>
<body>
	<div id="wrap">
		<div id="header">
		<h1><?php echo anchor("", "HTHS Rain Garden"); ?></h1>
		<ul>
		<?php foreach ($list as $row): ?>
		<li><?php echo anchor($row->slug, $row->name); ?></li>
		<?php endforeach; ?>
		</ul>
		</div>
		<div id="main">
		<?php echo $content; ?>
		</div>
		<div id="footer">
		Site by Zachary Liu, 2011.
		</div>
	</div>
</body>
</html>