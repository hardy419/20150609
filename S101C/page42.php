<?php
 $title = '有向數的乘除運算';
 $is_index = 0;
 $con_id="90";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.4&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1D.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1D</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.4C 有向數除法</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/91.jpg" width="850" border="0" usemap="#Map" title="練習﹕輸入正確答案。"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 52px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 96px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 169px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 213px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 286px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 329px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 403px; left: 348px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 448px; left: 348px; width:40px;">

                    	<input type="text" class="text1" style="position: absolute; top: 72px; left: 435px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 190px; left: 435px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 307px; left: 435px; width:40px;">
                    	<input type="text" class="text1" style="position: absolute; top: 422px; left: 435px; width:40px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/92.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/91.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/92.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/91.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



