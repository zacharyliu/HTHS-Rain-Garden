<?php
$this->load->helper('url');
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?> - HTHS Rain Garden</title>
	<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.2.js"></script>
</head>
<body>
	<div id="wrap">
		<div id="header">
		<div id="cloud"></div>
		<h1><?php echo anchor("", "HTHS Rain Garden"); ?></h1>
		<div id="user">
		<?php
			if ($this->session->userdata('logged_in')) {
				echo 'Welcome, ' . $this->session->userdata('username') . ' <br /> ' . anchor('user/logout', 'Logout');
			} else {
				$this->load->helper('url');
				/*echo anchor('user/login', 'Login') . ' | ' . anchor('user/register', 'Register')*/;
				
				$this->load->view('login_view_inline');
			}
		?>
		</div>
		<ul>
		<?php foreach ($list as $row): ?>
		<li><?php echo anchor($row->slug, $row->name); ?></li>
		<?php endforeach; ?>
		</ul>
		<div id="dirt"></div>
		</div>
		<div id="main">
		<div id="title">
		<?php echo $name; ?>
		</div>
		<?php echo $content; ?>
		</div>
		<div id="footer">
		Site by Zachary Liu, 2011.
		</div>
	</div>
</body>
</html>