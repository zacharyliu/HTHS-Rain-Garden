This plant has not been adopted yet.<br />Want to adopt this plant? Fill out the form below.<br /><br />
<?php
$this->load->helper('form');
echo form_open('/adopt_request/add');
echo form_hidden('plant_id', $id);
echo form_input('name', 'Name');
echo '<br />';
echo form_input('email', 'Email');
echo '<br />';
echo form_submit('submit', 'Submit');
echo form_close();
?>