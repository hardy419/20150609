<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="61";				
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
			<img src="images/page/62.jpg" width="850" border="0" usemap="#Map" title="將撤除括號的法則倒過來用會有所發現，考慮以下情況﹕上式可進一步透過加法的交換性質 (即 a + b = b + a) 變成以下數式﹕日後借助直式可更快捷方便﹕"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="-1.7634854771784,354.46058091286,14.69571230982,370.91977869986" href="./page31_02.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



