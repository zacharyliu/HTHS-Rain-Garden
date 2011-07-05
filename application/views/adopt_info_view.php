<style type="text/css">
#adopt_info {
    width: 700px;
    height: 500px;
}
#adopt_box {
    padding: 10px;
    overflow: auto;
    height: 480px;
    position: relative;
}
</style>
<?php $this->load->view('plant_info_view_style'); ?>
<div id="adopt_info">
    <div id="plant_info">
        <?php
        $this->load->view('plant_info_view', $info);
        ?>
    </div>
    <div id="adopt_box">
        <?php echo $adopt_box; ?>
    </div>
</div>