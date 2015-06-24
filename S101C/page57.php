<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="123";				
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
			<img src="images/page/124.jpg" width="850" border="0" usemap="#Map" title="(3)某公司去年1至3月平均每月虧損5萬元，4至6月平均每月盈餘3萬元，7至9月平均每月盈餘4萬元，10至12月平均每月虧損6萬元，該公司去年總盈虧情況如何?"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="38.796680497925,95.816044260028,55.255878284924,112.27524204703" href="./page57_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



