<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="118";				
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
			<img src="images/page/119.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
					<div class="problem1">
						<div style="position: absolute; top: 115px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 144px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 115px; left: 372px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p2">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 144px; left: 372px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p2">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 115px; left: 620px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p3">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 144px; left: 620px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p3">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 265px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p4">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 293px; left: 125px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p4">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 265px; left: 372px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p5">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 293px; left: 372px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p5">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 265px; left: 620px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p6">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 293px; left: 620px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p6">
							<label for="p1_a"></label>
						</div>
					</div>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 136px; left: 190px;">
                        <input type="text" class="text2" style="position: absolute; top: 136px; left: 437px;">
                        <input type="text" class="text2" style="position: absolute; top: 136px; left: 684px;">
                        <input type="text" class="text3" style="position: absolute; top: 286px; left: 190px;">
                        <input type="text" class="text4" style="position: absolute; top: 286px; left: 437px;">
                    	<input type="text" class="text1" style="position: absolute; top: 286px; left: 684px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/120.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/119.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/120.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/119.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



