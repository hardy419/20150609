<?php
 $title = '有向數的乘除運算';
 $is_index = 0;
 $con_id="71";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.4&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1D.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1D</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.4B 有向數乘法</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/72.jpg" width="850" border="0" usemap="#Map" title="仍用前面的例子，只不過更清晰地定義向東方的距離和速度為正，則向西方的距離和速度為負。現時之後的時間為正，現時之前的時間為負。假設小明向東方一直以每小時7km的速度跑，問在下列時刻中他在哪裏?"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="236.30705394191,92.876901798064,252.76625172891,109.33609958506" href="./page35_02.php">
			</map>
            <div style="position:absolute;left:8px;top:194px;width:826px;height:118px" title="小明向東方跑"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



