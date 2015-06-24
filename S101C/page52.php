<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="112";				
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
			<div class="cont_content" style="width:100%">有向數可以應用在日常生活之中。</div>
			<img src="images/page/113.jpg" width="850" border="0" usemap="#Map" title="例五﹕一份測驗卷有20條題目，答對可得5分，答錯則扣3分，不答仍要扣1分。小明不答2題而其餘題目則答對14題，問小明最後分數是多少。"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="19.986168741355,107.57261410788,36.445366528354,124.03181189488" href="./page52_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



