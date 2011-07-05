<style type="text/css">
#adopt_info {
    width: 700px;
    height: 500px;
}
#plant_info {
    float: left;
    width: 310px;
    padding: 10px;
    overflow: auto;
    height: 480px;
    border: 1px solid black;
    box-shadow: 5px 5px 5px #CCC;
    margin-right: 20px;
}
#plant_info div {
    margin-bottom: 0.5em;
}
#plant_info div:last-child {
    margin-bottom: 0;
}

.plant_image {
    text-align: center;
}

.plant_title {
    font-size: 1.1em;
    text-align: center;
    font-family: 'Georgia', serif;
}

#adopt_box {
    padding: 10px;
    overflow: auto;
    height: 480px;
    position: relative;
}
</style>
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