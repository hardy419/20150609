<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="24";				
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
					<h3 class="right" style="color:#984807">相反數&nbsp;&nbsp;&nbsp;絕對值&nbsp;&nbsp;&nbsp;自然數&nbsp;&nbsp;&nbsp;整數&nbsp;&nbsp;&nbsp;有向數&nbsp;&nbsp;&nbsp;數線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:110%">考慮 +5 和 –5 兩個數，它們所含的數字相同，但符號不同，我們稱這樣的一對數為相反數。</div>
			<img src="images/page/25.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
				
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



