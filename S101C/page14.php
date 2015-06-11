<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="28";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.2&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1B.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1B</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.2C 數線</div></h2>
					<h3 class="right" style="color:#984807">數線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/29.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
            <div style="position:absolute;left:64px;top:203px;width:688px;height:64px" title="數線"></div>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 170px; left: 94px; width:30px;">
                        <input type="text" class="text2" style="position: absolute; top: 170px; left: 137px; width:30px;">
                        <input type="text" class="text2" style="position: absolute; top: 170px; left: 178px; width:30px;">
                        <input type="text" class="text3" style="position: absolute; top: 170px; left: 220px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 263px; width:30px;">
                    	<input type="text" class="text1" style="position: absolute; top: 170px; left: 306px; width:30px;">
                        <input type="text" class="text3" style="position: absolute; top: 170px; left: 348px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 432px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 475px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 517px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 560px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 602px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 645px; width:30px;">
                        <input type="text" class="text4" style="position: absolute; top: 170px; left: 687px; width:30px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/30.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/29.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/30.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/29.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



