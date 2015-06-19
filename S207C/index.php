<?php
 $title = '續百分法';
 $is_index = 1;
 $con_id="0";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content' style="width:880px;">
			<div class='cont_title_index' style="width:880px;">
				<div class='index_title_num left'>1</div>
				<div class='title_top_index left'>
					<h1 class='left h1_title_index fontweight_normal'>續百分法</h1>
					<div class='clear'></div>
				</div><!--title_top_index-->
				<div class='title_line_index title_line_blue'></div>
					<div class='clear'></div>
				<div class='title_bottom'>
					<h3></h3>
				</div><!--title_bottom-->
			</div>
			<div class='cont'>
		    <div class="cont_content"></div>
		    <img src="images/page/1.jpg" width="850" border="0"  usemap="#Map"/>
            <map name="Map" id="Map">
              <area shape="rect" coords="41,60,243,85" href="page02.php" />
              <area shape="rect" coords="42,94,249,119" href="page04.php" />
              <area shape="rect" coords="37,180,210,203" href="page05.php" />
              <area shape="rect" coords="36,213,150,233" href="page06.php" />
              <area shape="rect" coords="37,241,249,265" href="page10.php" />
              <area shape="rect" coords="38,273,183,299" href="page18.php" />
              <area shape="rect" coords="38,303,222,330" href="page20.php" />
              <area shape="rect" coords="36,336,244,366" href="page28.php" />
              <area shape="rect" coords="440,59,616,84" href="page32.php" />
              <area shape="rect" coords="440,93,595,114" href="page36.php" />
              <area shape="rect" coords="440,120,607,147" href="page38.php" />
              <area shape="rect" coords="441,154,613,180" href="page40.php" />
              <area shape="rect" coords="441,183,620,209" href="page42.php" />
              <area shape="rect" coords="441,213,668,237" href="page52.php" />
            </map>
		    </div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>