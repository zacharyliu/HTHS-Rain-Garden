<div style="text-align: center;">
<?php
$this->load->helper('form');

echo form_open('user/login');
echo form_label('Username', 'username');
echo '<br />';
echo form_input(array('name' => 'username', 'id' => 'username'));
echo '<br /><br />';
echo form_label('Password', 'password');
echo '<br />';
echo form_password(array('name' => 'password', 'id' => 'password'));
echo '<br /><br />';
echo form_label('Confirm Password', 'confirmpassword');
echo '<br />';
echo form_password(array('name' => 'confirmpassword', 'id' => 'confirmpassword'));
echo '<br /><br />';
echo form_submit('submit', 'Register');
echo form_close();
?>
</div>