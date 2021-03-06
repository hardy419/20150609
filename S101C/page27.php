<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="50";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3D 帶有括號的有向數加減</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">加減正數的情況已有法則解決，加減一個負數如何計算呢?</div>
			<img src="images/page/51.jpg" width="850" border="0" usemap="#Map" title="3 + (-4)、 -3 + (-4)、 3 - (-4)、 -3 - (-4) 等如何計算呢?我們也以一個情境來比擬：一個企業集團如實質擁有資產，則該資產為正，若負債則看為負資產。若合併一個新成員則資產會相加，若撇除一個成員則會從原有資產減去撇除的資產。如此則"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="41.147994467497,163.4163208852,57.607192254495,179.8755186722" href="./page27_01.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



