<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?>HTHS Rain Garden</title>
</head>
<body>
	<div id="wrap">
		<div id="header">
		<h1>HTHS Rain Garden</h1>
		<ul>
		<?php foreach ($list as $row): ?>
		<li><?php echo $row->name; ?></li>
		<?php endforeach; ?>
		</ul>
		</div>
		<div id="main">
		<?php echo $content; ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>