<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="18";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.2A 有向數</div></h2>
					<h3 class="right" style="color:#984807">有向數&nbsp;&nbsp;&nbsp;&nbsp;正數&nbsp;&nbsp;&nbsp;&nbsp;負數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">出現了負數的觀念後，我們對事物的描述就更豐富及更容易了。</div>
			<img src="images/page/19.jpg" width="850" border="0" usemap="#Map" title="後來人們更將一些可抵銷的東西分別用正負數來定義，例如賺錢的交易以正數表示成果，虧蝕則以負數表示；股票的升幅以正數表示，跌幅以負數表示。一般來說，正數含有「高於」、「上升」、「增加」、「利潤」等涵義，而負數則含有相反的涵義。再後來，有向數可作更廣泛的應用。例如在只限於東西方向的運動上，向東的移動就以正數表示，向西的移動就以負數表示 (到這階段，負數已沒有欠或減少的意思，純粹由定義決定。其實相反定義也可以 (例如向東為負向西為正)，因此，這定義沒有絕對的規限)。這些彈性拓闊了人類的思維，將原本的文字描述數學化，變成可以數學操作，藉此為科學及社會科學帶來很大的進步。"/>
			<map name="Map" id="Map">
				
			</map>
			<div title="交易圖象" style="position:absolute;left:282px;top:143px;width:147px;height:147px;z-index:100"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



