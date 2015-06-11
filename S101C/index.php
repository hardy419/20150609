<?php
 $title = '比和率';
 $is_index = 1;
 $con_id="0";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content' style="width:880px;">
			<div class='cont_title_index' style="width:880px;">
				<div class='index_title_num left'>1</div>
				<div class='title_top_index left'>
					<h1 class='left h1_title_index fontweight_normal'>有向數</h1>
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
		    <img src="images/page/1.jpg" width="850" border="0" usemap="#Map"/>
            <map name="Map" id="Map">
              <area shape="rect" coords="20,54,110,74" href="page02.php" />
              <area shape="rect" coords="11,78,149,108" href="page05.php" />
              <area shape="rect" coords="12,174,153,199" href="page07.php" />
              <area shape="rect" coords="11,203,155,233" href="page09.php" />
              <area shape="rect" coords="11,234,111,267" href="page11.php" />
              <area shape="rect" coords="11,268,184,301" href="page15.php" />
              <area shape="rect" coords="12,355,128,384" href="page17.php" />
              <area shape="rect" coords="11,386,225,418" href="page19.php" />
              <area shape="rect" coords="10,418,167,452" href="page23.php" />
              <area shape="rect" coords="416,41,669,79" href="page27.php" />
              <area shape="rect" coords="415,79,556,111" href="page29.php" />
              <area shape="rect" coords="416,169,605,204" href="page33.php" />
              <area shape="rect" coords="416,204,565,234" href="page35.php" />
              <area shape="rect" coords="416,238,567,265" href="page41.php" />
              <area shape="rect" coords="416,267,609,303" href="page43.php" />
              <area shape="rect" coords="416,354,585,388" href="page47.php" />
            </map>
		    </div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



