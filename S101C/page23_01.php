<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="44";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3C 累積與抵消</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/45.jpg" width="850" border="0" usemap="#Map" title="基本上我們已可計算一個有向數加或減一個正數，但是否每次都要構思那個情境或運用數線呢? 我們嘗試從已得的結果去找一些更快的方法。已有的結果如下﹕我們看到若不計正負符號，答案的數字只有 5 和 3，那麼何時會出現 5，何時會出現 3?若確定數字之後，答案的正負號有沒有規律可按而作出決定?"/>
			<map name="Map" id="Map">
				
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



