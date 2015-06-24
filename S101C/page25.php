<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="47";				
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
			<img src="images/page/48.jpg" width="850" border="0" usemap="#Map" title="基本上我們已可計算一個有向數加或減一個正數，但是否每次都要構思那個情境或運用數線呢? 我們嘗試從已得的結果去找一些更快的方法。已有的結果如下﹕我們看到若不計正負符號，答案的數字只有 5 和 3，那麼何時會出現 5，何時會出現3?若確定數字之後，答案的正負號有沒有按規律出現?利用數線可協助我們更了解累積和抵消的由來﹕相反地，站在 0 的右方的正數要減一個正數，或站在的左方要加一個正數，則走的方向會和原來方向相反，所以會相互抵消，抵消後的方向則取決於站得足夠遠還是走得足夠遠，所以答案的正負號由較大絕對值的數的正負情況決定。［註：絕對值非課程所需，有關絕對值之概念請參第 1.2 節］"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="557.26141078838,381.50069156293,573.72060857538,397.95988934993" href="./page25_01.php">
			</map>
            <div style="position:absolute;left:15px;top:350px;width:826px;height:174px" title="數線"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



