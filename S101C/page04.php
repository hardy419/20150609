<?php
 $title = '負數的產生';
 $is_index = 0;
 $con_id="6";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.1A 自然數</div></h2>
					<h3 class="right" style="color:#984807">正數&nbsp;&nbsp;&nbsp;&nbsp;負數&nbsp;&nbsp;&nbsp;&nbsp;自然數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">人類對數學的探索是由數算 1、2、3、4…開始，這些可數算的數字稱為自然數，後來人類進一步利用這些自然數作簡單的計算，在很長的時期中使用自然數已可解決生活上的問題，但隨著生活上日趨複雜，自然數就不足以解決所有問題了。</div>
			<img src="images/page/7.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="66.424619640387,156.95020746888,82.883817427386,173.40940525588" href="./page04_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



