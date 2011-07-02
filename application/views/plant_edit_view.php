<?php

$this->load->helper('form');

echo form_open_multipart('plants/edit/submit');

echo form_hidden('id', $id);

echo "Title<br />";
echo form_input('title', $title);
echo "<br /><br />";

echo "Content<br />";
echo form_textarea('content', $content);
echo "<br /><br />";

echo "Links<br />";
echo form_textarea('links', $links);
echo "<br /><br />";

echo "Image<br />";
if ($image != '') {
	echo 'An image is currently set. Uploading a new image will replace it.<br />';
}
echo form_upload('image');
echo "<br /><br />";

echo form_submit('submit', 'Submit');

echo form_close();
?>