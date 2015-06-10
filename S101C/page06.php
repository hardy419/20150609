<?php
 $title = '負數的產生';
 $is_index = 0;
 $con_id="12";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.1&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1A.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1A</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.1B 認識負數</div></h2>
					<h3 class="right" style="color:#984807">正數&nbsp;&nbsp;&nbsp;&nbsp;負數&nbsp;&nbsp;&nbsp;&nbsp;自然數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/13.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 204px; left: 229px;">
                        <input type="text" class="text2" style="position: absolute; top: 205px; left: 457px;">
                        <input type="text" class="text2" style="position: absolute; top: 204px; left: 684px;">
                        <input type="text" class="text3" style="position: absolute; top: 335px; left: 229px;">
                        <input type="text" class="text4" style="position: absolute; top: 336px; left: 457px;">
                    	<input type="text" class="text1" style="position: absolute; top: 336px; left: 685px;">
                        <input type="text" class="text3" style="position: absolute; top: 391px; left: 229px;">
                        <input type="text" class="text4" style="position: absolute; top: 393px; left: 458px;">
                        <input type="text" class="text4" style="position: absolute; top: 393px; left: 686px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/14.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/13.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/14.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/13.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



