<?php
 $title = '有向數的乘除運算';
 $is_index = 0;
 $con_id="67";				
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
			<img src="images/page/68.jpg" width="850" border="0" usemap="#Map" title="在小學時我們學到一個自然數乘一個自然數是加法的累積，例如 7 × 4 = 7 + 7 + 7 + 7，累積的次數是可數的。按上述情況，我們可以考慮一個負數 (被乘數) 乘一個自然數 (乘數)，但正數乘負數及負數乘負數又如何呢?憑上述方法難以得到結論。為解決上述問題，我們需尋找一條用乘法的公式，其中被乘數、乘數及積皆可用有向數表示。在前節中我們曾提及凡有相反意義及可抵銷的數量可用有向數表示，而其中﹕ 「距離 = 速度 × 時間」正可協助我們理解有向數的乘法。"/>
			<map name="Map" id="Map">
				
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



