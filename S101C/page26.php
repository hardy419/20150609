<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="48";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.3&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1C.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1C</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.3C 累積與抵消</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/49.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,274,829,313" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 73px; left: 233px;">
                        <input type="text" class="text2" style="position: absolute; top: 73px; left: 583px;">
                        <input type="text" class="text2" style="position: absolute; top: 120px; left: 233px;">
                        <input type="text" class="text3" style="position: absolute; top: 120px; left: 583px;">
                        <input type="text" class="text4" style="position: absolute; top: 168px; left: 233px;">
                    	<input type="text" class="text1" style="position: absolute; top: 168px; left: 583px;">
                        <input type="text" class="text4" style="position: absolute; top: 213px; left: 233px;">
                        <input type="text" class="text4" style="position: absolute; top: 213px; left: 583px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/50.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/49.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/50.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/49.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



