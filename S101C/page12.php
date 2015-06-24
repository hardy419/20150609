<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="25";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.2C 數線</div></h2>
					<h3 class="right" style="color:#984807">相反數&nbsp;&nbsp;&nbsp;絕對值&nbsp;&nbsp;&nbsp;自然數&nbsp;&nbsp;&nbsp;整數&nbsp;&nbsp;&nbsp;有向數&nbsp;&nbsp;&nbsp;數線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:110%">考慮 +5 和 –5 兩個數，它們所含的數字相同，但符號不同，我們稱這樣的一對數為相反數。</div>
			<img src="images/page/26.jpg" width="850" border="0" usemap="#Map" title="(相反數有時指一對數，有時也只指一個數。例如 +7 和 –7 也是一對相反數，另一方面，我們也會描述 +7 的相反數是 –7 或 – 7 的相反數是 + 7 。)+5 和 –5 兩個數所含的數字相同，但符號不同，這不計符號所含的數字則稱為絕對值， 絕對值就是不理會正負號的數值，只描述該數的大小。例如 +5 和 –5 的絕對值都是5， + 9和 –9 的絕對值都是9。［註：絕對值非課程所需，但認識絕對值這概念日後有助更易了解或描述一些其他概念。］數學家將所有自然數，以及它們的相反數，再加上 0 合稱為整數 (自然數也稱為正整數)。正數及負數也合稱有向數，因除了絕對值以外，也提供一個方向的意義 (0 非正非負，不屬於有向數)。數學家為協助了解及日後的運算，也創製了「數線」。數線性質如下：不理正號或負號，絕對值較小的就更接近 0 (這點符合日常經驗，擁有 1元比擁有 2元更接近成為窮光蛋，負債 1元比負債 2元更易清除債務)。0與 1 之間的距離稱為單位長度，數線上任何兩點之間的距離是兩點所代表之數之差。"/>
			<map name="Map" id="Map">
				
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



