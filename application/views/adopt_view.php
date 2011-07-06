<?php
$this->load->helper('url');
?>

<style type="text/css">
#adopt_map a:hover {
	background-color: yellow;
	opacity: 0.8;
}

#simplemodal-container {
	border: 5px solid black;
	background-color: white;
	padding: 20px;
}
#simplemodal-overlay {
	background-color: black;
	opacity: 0.5;
}
#adopt_map a.adopted {
	background-image: url("<?php echo base_url(); ?>img/heart.png");
	background-position: center center;
	background-repeat: no-repeat;
	min-width: 20px;
	min-height: 20px;
}
</style>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.simplemodal.1.4.1.min.js"></script>
<script type="text/javascript">
function view(id) {
	$.get('<?php echo site_url(array('adopt', 'view')); ?>/' + id, function(data){
		$.modal(data, {
			overlayClose: true,
			onOpen: function(dialog) {
				dialog.overlay.fadeIn('fast')
				dialog.data.show();
				dialog.container.fadeIn('fast');
			},
			onClose: function(dialog) {
				dialog.container.fadeOut('fast');
				dialog.overlay.fadeOut('fast', function() {
					$.modal.close();
				});
			},
		});
	});
}

function show_adopted() {
	$.getJSON('<?php echo site_url(array('adopt', 'adopted')); ?>', function(data) {
		for (item in data) {
			$('#adopt_map a:eq(' + data[item].id + ')').addClass('adopted');
		}
	});
	
}

$(function(){
	$('#adopt_map a').click(function(){
		view($(this).index());
		return false;
	});
	
	show_adopted();
});
</script>

<div id="adopt_map">
<div class="imgmap_css_container" id="imgmap20117123626" style="width: 860px; height: 320px; background: url('../img/raingardenmap.jpg'); position: relative;"><a style="position: absolute; top: 96px; left: 8px; width: 23px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 166px; left: 18px; width: 38px; height: 36px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 210px; left: 46px; width: 20px; height: 14px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 222px; left: 115px; width: 24px; height: 26px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 268px; left: 135px; width: 47px; height: 33px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 248px; left: 158px; width: 33px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 245px; left: 197px; width: 34px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 261px; left: 228px; width: 30px; height: 16px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 283px; left: 198px; width: 45px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 269px; left: 267px; width: 45px; height: 29px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 239px; left: 281px; width: 30px; height: 27px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 257px; left: 318px; width: 22px; height: 16px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 220px; left: 327px; width: 38px; height: 33px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 214px; left: 370px; width: 19px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 183px; left: 377px; width: 37px; height: 32px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 176px; left: 438px; width: 39px; height: 36px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 217px; left: 472px; width: 20px; height: 13px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 232px; left: 487px; width: 38px; height: 34px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 260px; left: 526px; width: 17px; height: 13px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 240px; left: 552px; width: 29px; height: 25px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 273px; left: 554px; width: 41px; height: 26px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 253px; left: 596px; width: 36px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 259px; left: 636px; width: 36px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 287px; left: 623px; width: 32px; height: 15px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 271px; left: 684px; width: 36px; height: 27px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 238px; left: 677px; width: 33px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 224px; left: 718px; width: 32px; height: 24px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 254px; left: 737px; width: 20px; height: 13px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 224px; left: 762px; width: 39px; height: 27px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 210px; left: 796px; width: 17px; height: 16px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 165px; left: 806px; width: 36px; height: 32px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 96px; left: 825px; width: 32px; height: 40px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 109px; left: 791px; width: 28px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 145px; left: 767px; width: 29px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 141px; left: 726px; width: 25px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 174px; left: 676px; width: 26px; height: 22px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 204px; left: 652px; width: 29px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 188px; left: 617px; width: 29px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 172px; left: 571px; width: 34px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 193px; left: 538px; width: 30px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 173px; left: 502px; width: 31px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 143px; left: 544px; width: 12px; height: 36px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 146px; left: 636px; width: 12px; height: 33px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 126px; left: 682px; width: 12px; height: 37px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 95px; left: 756px; width: 14px; height: 37px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 140px; left: 448px; width: 20px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 159px; left: 470px; width: 21px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 150px; left: 495px; width: 25px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 45px; left: 771px; width: 19px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 59px; left: 798px; width: 23px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 56px; left: 826px; width: 18px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 10px; left: 791px; width: 34px; height: 46px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 85px; left: 453px; width: 73px; height: 58px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 85px; left: 331px; width: 74px; height: 59px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 142px; left: 392px; width: 23px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 158px; left: 371px; width: 25px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 149px; left: 345px; width: 23px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 168px; left: 330px; width: 31px; height: 27px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 189px; left: 296px; width: 30px; height: 23px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 172px; left: 258px; width: 31px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 185px; left: 217px; width: 31px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 205px; left: 182px; width: 32px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 173px; left: 157px; width: 34px; height: 22px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 138px; left: 108px; width: 27px; height: 22px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 144px; left: 64px; width: 34px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 109px; left: 41px; width: 28px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 93px; left: 91px; width: 16px; height: 35px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 124px; left: 165px; width: 15px; height: 36px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 142px; left: 211px; width: 18px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 142px; left: 305px; width: 16px; height: 39px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 212px; left: 228px; width: 75px; height: 28px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 178px; left: 101px; width: 56px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 214px; left: 557px; width: 78px; height: 25px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 192px; left: 690px; width: 63px; height: 29px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 37px; left: 119px; width: 27px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 57px; left: 159px; width: 28px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 87px; left: 226px; width: 17px; height: 29px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 92px; left: 264px; width: 23px; height: 34px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 95px; left: 572px; width: 20px; height: 33px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 89px; left: 616px; width: 19px; height: 30px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 60px; left: 676px; width: 25px; height: 37px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 38px; left: 717px; width: 28px; height: 38px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 28px; left: 758px; width: 12px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 59px; left: 751px; width: 17px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 85px; left: 740px; width: 16px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 106px; left: 728px; width: 15px; height: 16px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 107px; left: 698px; width: 16px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 104px; left: 677px; width: 17px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 94px; left: 658px; width: 15px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 102px; left: 639px; width: 17px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 118px; left: 625px; width: 12px; height: 20px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 131px; left: 609px; width: 20px; height: 29px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 135px; left: 585px; width: 23px; height: 26px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 134px; left: 562px; width: 14px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 119px; left: 541px; width: 20px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 95px; left: 532px; width: 18px; height: 22px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 97px; left: 314px; width: 16px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 119px; left: 303px; width: 17px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 132px; left: 282px; width: 19px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 132px; left: 260px; width: 19px; height: 23px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 129px; left: 240px; width: 17px; height: 23px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 118px; left: 222px; width: 14px; height: 17px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 100px; left: 209px; width: 12px; height: 23px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 89px; left: 186px; width: 13px; height: 31px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 101px; left: 166px; width: 16px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 104px; left: 147px; width: 19px; height: 23px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 99px; left: 117px; width: 17px; height: 24px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 81px; left: 109px; width: 15px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 56px; left: 96px; width: 13px; height: 16px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 25px; left: 89px; width: 21px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 54px; left: 19px; width: 18px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 58px; left: 43px; width: 19px; height: 21px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 44px; left: 70px; width: 18px; height: 19px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 4px; left: 36px; width: 34px; height: 53px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 252px; left: 103px; width: 20px; height: 18px;"  alt="" title="" href="" target="" ><em></em></a><a style="position: absolute; top: 224px; left: 57px; width: 45px; height: 31px;"  alt="" title="" href="" target="" ><em></em></a><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></div>
</div>