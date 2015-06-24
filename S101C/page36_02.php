<?php
 $title = '有向數的乘除運算';
 $is_index = 0;
 $con_id="77";				
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
			<img src="images/page/78.jpg" width="850" border="0" usemap="#Map" title="現假設小明一直以每小時7km的速度向西方跑，問在下列時刻中他在哪裏?"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="437.34439834025,38.208852005533,453.80359612725,54.668049792531" href="./page36_03.php">
			</map>
            <div style="position:absolute;left:11px;top:122px;width:819px;height:123px" title="小明向西方跑"></div>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



