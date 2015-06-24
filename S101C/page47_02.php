<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="102";				
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
			<img src="images/page/103.jpg" width="850" border="0" usemap="#Map" title="例一﹕小明在一座香港樓宇的不同樓層中上落，問他最後在哪一個樓層。註﹕曾提及在中國內地，地面層叫1樓，上一層叫2樓，地面下一層叫-1樓，沒有0樓，所以這計法不適合在中國內地沒有0樓 的樓宇。例如在中國內地，由3樓落5層會去到-3樓。"/>
			<map name="Map" id="Map">
				
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



