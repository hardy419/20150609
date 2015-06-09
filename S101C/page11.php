<?php
 $title = '前備知識';
 $is_index = 0;
 $con_id="21";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>4.1A&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S304C_4A.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 4A</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">尺規作圖</div></h2>
					<h3 class="right" style="color:#984807">角平分線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/22.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
			  <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			
			<div class="page_p">
					<div class="problem1">
						<div style="position: absolute; top: 227px; left: 101px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<span class="round" style="width:13px;height:13px; position:relative;left:234px"></span>
							<input type="checkbox" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 360px; left: 101px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<span class="round" style="width:13px;height:13px; position:relative;left:234px"></span>
							<input type="checkbox" dis="a" ans="b" id="p2_a" name="page11_p2">
							<label for="p2_a"></label>
						</div>
					</div>
					<script type="text/javascript">
					$(function(){
						$('#check-anw').click(function (){
							if("images/page/22.jpg"==$('.cont>img').attr("src")){
								$('.cont>img').attr("src","images/page/23.jpg");
							}
							else{
								$('.cont>img').attr("src","images/page/22.jpg");
							}
							return false;
						})
					})
					</script>
				</div>
			
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



