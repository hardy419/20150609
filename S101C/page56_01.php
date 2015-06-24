<?php
 $title = '有向數的應用';
 $is_index = 0;
 $con_id="121";				
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
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/122.jpg" width="850" border="0" usemap="#Map" title="找出正確答案。(1) 一輛汔車分別向東或西走了6次車程，分別是向西行8km、再向東行6km、再向東行5km、再向西行4km、再向西行8km 及再向東行7km。問該汽車最後距離出發點多遠及在哪一方向。(2)在本週有五個股市交易天中，首四天恆生指數的升跌幅度分別是跌25點、升36點、跌120點及升70點，而本周合共跌了59點，問最後一個交易天升跌多少。"/>
			<map name="Map" id="Map">
				<area shape="rect" coords="21.161825726141,342.11618257261,37.62102351314,358.57538035961" href="./page56_02.php">
			</map>
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



