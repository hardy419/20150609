<?php
 $title = '負數的產生';
 $is_index = 0;
 $con_id="10";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.1B 認識負數</div></h2>
					<h3 class="right" style="color:#984807">正數&nbsp;&nbsp;&nbsp;&nbsp;負數&nbsp;&nbsp;&nbsp;&nbsp;自然數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/11.jpg" width="850" border="0" usemap="#Map" title="在前頁我們得出﹕是否每次都要做如此類比的思考才能得到負數的結果呢? 可否直接有一個計算的方法呢?"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="89.9377593361,288.62378976487,106.3969571231,305.08298755187" href="./page05_02.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



