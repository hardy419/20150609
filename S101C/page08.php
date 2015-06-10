<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="17";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.2A 有向數</div></h2>
					<h3 class="right" style="color:#984807">有向數&nbsp;&nbsp;&nbsp;&nbsp;正數&nbsp;&nbsp;&nbsp;&nbsp;負數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">出現了負數的觀念後，我們對事物的描述就更豐富及更容易了。</div>
			<img src="images/page/18.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="-1.1756569847856,306.84647302905,15.283540802213,323.30567081604" href="./page08_01.php">
			</map>
			<div title="交易圖象" style="position:absolute;left:282px;top:143px;width:147px;height:147px;z-index:100"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



