<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="63";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3E 撤除括號</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/64.jpg" width="850" border="0" usemap="#Map" title="練習﹕找出各題的正確答案。"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 101px; left: 119px;">
                        <input type="text" class="text2" style="position: absolute; top: 336px; left: 119px;">

                        <input type="text" class="text2" style="position: absolute; top: 70px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 108px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 145px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 186px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 317px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 352px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 387px; left: 606px;">
                        <input type="text" class="text2" style="position: absolute; top: 428px; left: 606px;">

                        <input type="text" class="text2" style="position: absolute; top: 70px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 108px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 145px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 186px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 317px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 352px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 387px; left: 703px;">
                        <input type="text" class="text2" style="position: absolute; top: 428px; left: 703px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/65.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/64.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/65.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/64.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



