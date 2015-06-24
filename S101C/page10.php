<?php
 $title = '有向數';
 $is_index = 0;
 $con_id="21";				
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
					<h2 class='left fontweight_normal'><div class="cont_content">1.2B 正數和負數</div></h2>
					<h3 class="right" style="color:#984807">有向數&nbsp;&nbsp;&nbsp;&nbsp;正數&nbsp;&nbsp;&nbsp;&nbsp;負數</h3>
				</div><!--title_bottom-->
			</div><!--cont_title-->
			<div class='cont'>
			<div class="cont_content" style="width:100%">我們目前可以看到負號是以減號「-」表示 (同學可猜猜為何會選此符號)，例如 -5，有時更會寫成 (-5)。正數一般可以不寫符號，例如 7 就已代表正 7，但有時要特別強調其正的屬性時會寫成 +7 或 (+7) (同學也可再猜猜為何正號會以加號來表示)。本書以簡潔為取向，在不會引起誤會情況下，不用寫的負號或括號就會盡量不寫，例如﹕(+8)會寫為8，(-5)會寫為-5。</div>
			<img src="images/page/22.jpg" width="850" border="0" usemap="#Map" title="練習﹕以正負數表達以下情況或解讀正負數的表達意思﹕"/>
			<map name="Map" id="Map">
			  <area id="check-anw" shape="rect" coords="725,489,829,526" href="#" />
			</map>
			
			<div class="page_p">
					<div class="problem1">
						<div style="position: absolute; top: 227px; left: 101px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
						<div style="position: absolute; top: 227px; left: 335px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p1_a" name="page11_p1">
							<label for="p1_a"></label>
						</div>
					</div>
					<div class="problem1">
						<div style="position: absolute; top: 358px; left: 101px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p2">
							<label for="p2_a"></label>
						</div>
						<div style="position: absolute; top: 358px; left: 335px;" class="checked_box">
							<span class="round" style="width:13px;height:13px"></span>
							<input type="radio" dis="a" ans="b" id="p2_a" name="page11_p2">
							<label for="p2_a"></label>
						</div>
					</div>
					<script type="text/javascript">
					var img=new Image();img.src="images/page/23.jpg";
					$(function(){
						$('#check-anw').click(function (){
							if("images/page/22.jpg"==$('.cont>img').attr("src")){
								$('.cont>img').attr("src","images/page/23.jpg");
							}
							else{
								$('.cont>img').attr("src","images/page/22.jpg");
							}
							return false;
						})
					})
					</script>
				</div>
			
			</div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



