<?php
 $title = '有向數的加減運算';
 $is_index = 0;
 $con_id="58";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.3E 撤除括號</div></h2>
					<h3 class="right" style="color:#984807">有向數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/59.jpg" width="850" border="0" usemap="#Map"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
					<div class="problem1">
						<div style="position: absolute; top: 79px; left: 79px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 116px; left: 79px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 79px; left: 357px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p2">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 116px; left: 357px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p2">
							<label for="p2_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 79px; left: 634px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p3">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 116px; left: 634px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p3">
							<label for="p2_a"></label>
						</div>
					</div>

              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 245px; left: 218px;">
                        <input type="text" class="text2" style="position: absolute; top: 308px; left: 218px;">
                        <input type="text" class="text2" style="position: absolute; top: 371px; left: 218px;">
                        <input type="text" class="text3" style="position: absolute; top: 434px; left: 218px;">
                        <input type="text" class="text4" style="position: absolute; top: 245px; left: 374px;">
                    	<input type="text" class="text1" style="position: absolute; top: 308px; left: 374px;">
                        <input type="text" class="text3" style="position: absolute; top: 371px; left: 374px;">
                        <input type="text" class="text4" style="position: absolute; top: 434px; left: 374px;">
                    </div>

					<div class="problem1">
						<div style="position: absolute; top: 265px; left: 278px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p4">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 265px; left: 331px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p4">
							<label for="p2_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 329px; left: 278px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p5">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 329px; left: 331px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p5">
							<label for="p2_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 391px; left: 278px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p6">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 391px; left: 331px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p6">
							<label for="p2_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 453px; left: 278px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p7">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 453px; left: 331px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" style="position:relative;left:-5px;top:-27px;width:40px;height:40px" name="page11_p7">
							<label for="p2_a"></label>
						</div>
					</div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/60.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/59.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/60.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/59.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



