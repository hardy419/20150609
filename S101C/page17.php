<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="34";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3A 加和減</div></h2>
					<h3 class="right" style="color:#984807">負數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/35.jpg" width="850" border="0" usemap="#Map" title="在小學中我們學會了 4 + 1 = 5，4 - 1 = 3，1 + 4 = 5；在本課前面部分學了 1 - 4 = -3 ; 並開始引入了負數，那麼負數如何運算呢?-4 + 1、 -4 - 1、 -1 + 4、 -1 - 4 等答案是甚麼呢?"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="-1.1756569847856,72.890733056708,15.283540802213,89.349930843707" href="./page17_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



