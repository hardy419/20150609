<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="16";				
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
			<img src="images/page/17.jpg" width="850" border="0" usemap="#Map" title="生活例子一﹕我們知道水在攝氏表0C 時會結冰，低於這溫度的就以負的溫度表示(例如北極的冬天溫度可低至40C)。生活例子二﹕出現了負數之後，那些不是負數或零的數就稱為正數。以上是一些可看到清楚形象的正負數 (例如寒暑表的讀數，樓宇的樓層)，但隨後有一些抽象的東西也可用正負數代表，例如我真正擁有的資產以正數表示，負債以負數表示。註﹕ 在舊式的中式樓宇中，地面的一層稱為「地下」，上一層稱為二樓，這種舊式命名方法至今仍在一些舊樓或鄉村樓房中採用。這些樓宇的中英文地址寫法在樓層上是有差異的。而在中國內地，地面層叫1樓，上一層叫2樓，地面下一層叫1樓，沒有0樓，這種叫法在一些計算上會引起混亂，稍後我們將會看到這些混亂情況。"/>
			<map name="Map" id="Map">
				
			</map>
			<div title="溫度表" style="position:absolute;left:647px;top:6px;width:170px;height:260px;z-index:100"></div>
			<div title="升降機" style="position:absolute;left:680px;top:267px;width:142px;height:108px;z-index:100"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



