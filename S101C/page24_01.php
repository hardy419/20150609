<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="46";				
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
			<img src="images/page/47.jpg" width="850" border="0" usemap="#Map" title="基本上我們已可計算一個有向數加或減一個正數，但是否每次都要構思那個情境或運用數線呢? 我們嘗試從已得的結果去找一些更快的方法。已有的結果如下﹕我們看到若不計正負符號，答案的數字只有 5 和 3，那麼何時會出現 5，何時會出現3?若確定數字之後，答案的正負號有沒有按規律出現?利用數線可協助我們更了解累積和抵消的由來﹕正數本身站在 0 的右方，加一個正數就再向右走；負數則本身站在 0 的左方，減一個正數就再向左走。兩者都是同一方向累積走得更遠。而答案的正負號也跟隨同一方向。"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="557.26141078838,381.50069156293,573.72060857538,397.95988934993" href="./page24_02.php">
			</map>
            <div style="position:absolute;left:15px;top:350px;width:826px;height:174px" title="數線"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



