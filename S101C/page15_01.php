<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="31";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.2D 有向數的比較</div></h2>
					<h3 class="right" style="color:#984807">數線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/32.jpg" width="850" border="0" usemap="#Map" title="我們知道在自然數中，1 < 2 < 3 < 4 < 5 < 6… ，觀察上方的數線，我們可見到右方的自然數比左方的大。
此性質可否推廣至數線上所有數?以擁有資產或負債來比擬，有3.5元比有3元富有，有3元比沒有錢富有，沒有錢也相對地比負債2元富有，負債2元也相對地比負債2.4元富有。所以「右方代表的數比左方大」可在整條數線上成立。總結來說﹕除以往正數之間比較外，正數比 0 和負數都大，零大於負數，而若 a 和 b 是兩個正數及 a > b，則 –a < -b。"/>
			<map name="Map" id="Map">
				
			</map>
            <div style="position:absolute;left:49px;top:13px;width:715px;height:65px" title="數線"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



