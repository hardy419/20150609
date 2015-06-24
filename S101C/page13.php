<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="26";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>
<div class='left_content'>
			<div class='cont_title'>
				<div class='title_top'>
					<h1 class='left h1_title fontweight_normal'>1.2&nbsp;&nbsp;<?php echo $title; ?></h1>
					<div class='page_size right'>
						<a href="files/S101C_1B.pdf" target="_blank" class="worksheets"><img src='./images/img_hand.jpg' width=30 /><span>工作紙 1B</span></a>
					</div>
					<div class='clear'></div>
				</div><!--title_top-->
				<div class='title_line_fullW title_line_green'></div>
					<div class='clear'></div>
				 	<div class='title_bottom'>
					<h2 class='left fontweight_normal'><div class="cont_content">1.2C 數線</div></h2>
					<h3 class="right" style="color:#984807">數線</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%"></div>
			<img src="images/page/27.jpg" width="850" border="0" usemap="#Map" style="最常見的數線形式如下﹕為著簡潔，數線通常只顯示整數作參考，其實數線包括了整數以外的點，例如 1 與 2 之中間點代表 1.5，-4與 -5 之中間點代表 -4.5。練習﹕在方格中填上所代表的有向數。"/>
			<map name="Map" id="Map">
              <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
            <div style="position:absolute;left:42px;top:50px;width:688px;height:64px" title="數線"></div>
            <div style="position:absolute;left:43px;top:291px;width:700px;height:68px" title="數線"></div>
			<div class="page_p">
              <style>.problem1 input {background-color:transparent;border:none}</style>
              		<div class="problem1">
                    	<input type="text" class="text1" style="position: absolute; top: 390px; left: 551px;">
                        <input type="text" class="text2" style="position: absolute; top: 390px; left: 613px;">
                        <input type="text" class="text2" style="position: absolute; top: 435px; left: 551px;">
                        <input type="text" class="text3" style="position: absolute; top: 435px; left: 613px;">
                    </div>
              </div>
			</div>
		</div><!--left_content-->
		<script>
			var img=new Image();img.src="images/page/28.jpg";
			$().ready(function (){
				$('#check-anw').click(function (){
					if("images/page/27.jpg"==$('.cont>img').attr("src")){
						$('.cont>img').attr("src","images/page/28.jpg");
					}
					else{
						$('.cont>img').attr("src","images/page/27.jpg");
					}
					return false;
				})
			})
		</script>
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



