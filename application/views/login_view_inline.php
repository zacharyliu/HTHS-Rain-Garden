<div>
<?php
$this->load->helper('form');

echo form_open('user/login/submit');
?>
<div style="float: left;">
<?php
echo form_input('username', 'Username');
echo '<br />';
echo form_password('password', 'Password');
?>
</div>
<div style="float: left;">
<?php
echo form_submit(array('name' => 'submit', 'value' => 'Login', 'style' => 'width: 45px; height: 52px;'));
echo form_close();
?>
</div>
</div>