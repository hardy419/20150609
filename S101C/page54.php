<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="116";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.5&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1E.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1E</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.5A 有向數的應用</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/117.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
					<div class="problem1">
						<div style="position: absolute; top: 114px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 142px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 114px; left: 367px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p2">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 142px; left: 367px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p2">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 114px; left: 609px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p3">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 142px; left: 609px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p3">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 260px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p4">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 288px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p4">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 260px; left: 367px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p5">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 288px; left: 367px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p5">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 260px; left: 609px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p6">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 288px; left: 609px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p6">
							<label for="p1_a"></label>
						</div>
					</div>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 134px; left: 212px;">
                        <input type="text" class="text2" style="position: absolute; top: 134px; left: 454px;">
                        <input type="text" class="text2" style="position: absolute; top: 134px; left: 696px;">
                        <input type="text" class="text3" style="position: absolute; top: 280px; left: 212px;">
                        <input type="text" class="text4" style="position: absolute; top: 280px; left: 454px;">
                    	<input type="text" class="text1" style="position: absolute; top: 280px; left: 696px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/118.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/117.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/118.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/117.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



