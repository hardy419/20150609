<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="41";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3B 數線與有向數加減</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">加一個正數 (例如自然數)，數值會變大，在數線應向右邊走，減一個正數 (例如自然數)，數值會變小，在數線應向左邊走。</div>
			<img src="images/page/42.jpg" width="850" border="0" usemap="#Map" title="-4 + 1 及 -4 - 1 如何顯示?"/>
			<map name="Map" id="Map">
				
			</map>
            <div style="position:absolute;left:88px;top:110px;width:700px;height:117px" title="數線"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



