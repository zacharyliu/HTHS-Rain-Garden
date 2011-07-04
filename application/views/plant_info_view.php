<?php
$this->load->helper('url');
?>
<div class="plant_item">
    <div class="plant_image">
            <?php
                    if ($image != "") {
                            echo '<img src="' . base_url() . 'img/plants/' . $image . '"></img>';
                    }
            ?>
    </div>
    <div class="plant_title">
    <?php echo $title; ?>
    </div>
    <div class="plant_content">
    <?php echo $content; ?>
    </div>
    <div class="plant_links">
    <?php echo $links; ?>
    </div>
    <?php if ($this->session->userdata('logged_in')): ?>
    <div class="plant_edit">
    <?php echo anchor(array('plants', 'edit', $id), 'Edit'); ?>
    </div>
    <?php endif; ?>
</div>