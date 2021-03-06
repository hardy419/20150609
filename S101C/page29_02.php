<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="56";				
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
			<img src="images/page/57.jpg" width="850" border="0" usemap="#Map" title="除加減一個負數可撤除括號外，亦有其他可撇除括號的情況﹕第一個數字如有括號可直接除去。其次是括號內若是正數，就無需正號及括號 (因為 +a 其實就等於 a)。總結撤除括號法則﹕"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="-0.58782849239281,290.38727524205,15.871369294606,306.84647302905" href="./page29_03.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



