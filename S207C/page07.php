<?php
 $title = '方程';
 $is_index = 0;
 $con_id="7";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>4.1&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S304C_4A.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 4A</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">4.1A 命題、開句和「解」</div></h2>
					<h3 class="right" style="color:#984807">命題</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/8.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
				<area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 209px; left: 276px; width:40px">
                        <input type="text" class="text2" style="position: absolute; top: 256px; left: 179px; width:40px">
                        <input type="text" class="text2" style="position: absolute; top: 256px; left: 252px; width:40px">
                        <input type="text" class="text3" style="position: absolute; top: 256px; left: 324px; width:40px">
                        <input type="text" class="text4" style="position: absolute; top: 302px; left: 179px; width:40px">

                        <input type="text" class="text2" style="position: absolute; top: 347px; left: 485px; width:40px">
                        <input type="text" class="text3" style="position: absolute; top: 347px; left: 587px; width:40px">
                        <input type="text" class="text4" style="position: absolute; top: 347px; left: 660px; width:40px">

                    	<input type="text" class="text1" style="position: absolute; top: 394px; left: 179px; width:40px">
                        <input type="text" class="text3" style="position: absolute; top: 439px; left: 179px; width:40px">
                        <input type="text" class="text4" style="position: absolute; top: 439px; left: 250px; width:40px">
                        <input type="text" class="text4" style="position: absolute; top: 439px; left: 327px; width:40px">

					<div class="problem1">
						<div style="position: absolute; top: 438px; left: 433px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 468px; left: 433px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
					</div>

                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/9.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/8.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/9.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/8.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>