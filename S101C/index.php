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
              <area shape="rect" coords="20,82,140,106" href="page04.php" />
              <area shape="rect" coords="26,101,198,123" href="page06.php" />
              <area shape="rect" coords="25,132,209,152" href="page11.php" />
              <area shape="rect" coords="425,44,570,67" href="page31.php" />
              <area shape="rect" coords="425,75,523,94" href="page32.php" />
              <area shape="rect" coords="425,103,575,122" href="page33.php" />
              <area shape="rect" coords="24,231,106,251" href="page17.php" />
              <area shape="rect" coords="25,256,211,280" href="page20.php" />
              <area shape="rect" coords="25,287,187,307" href="page23.php" />
              <area shape="rect" coords="24,382,151,404" href="page26.php" />
              <area shape="rect" coords="25,412,125,431" href="page28.php" />
            </map>
		    </div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



