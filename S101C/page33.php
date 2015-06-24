<?php
 $title = '有向數的乘除運算';
 $is_index = 0;
 $con_id="65";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.4A 有向數乘以正數</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/66.jpg" width="850" border="0" usemap="#Map" title="在小學時我們學到一個自然數乘一個自然數是加法的累積，例如 7 × 4 = 7 + 7 + 7 + 7，累積的次數是可數的。按上述情況，我們可以考慮一個負數 (被乘數) 乘一個自然數 (乘數)，"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="-0.58782849239281,61.134163208852,15.871369294606,77.593360995851" href="./page33_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



