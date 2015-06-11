<?php
 $title = '有向數的應用';
 $is_index = 1;
 $con_id="127";				
 $line_img = $is_index == 1 ? 'blue_side' : 'green_side';
 include('./temp/header.php');
?>

<style>
.cont_left{
	float: left;
    width: 100%;
}
.cont_left div{
	margin:5px 0 5px 0;
}
.cont_right{
	float: left;
    width: 255px;
	background-color: #FCD5B4;
	padding: 20px 0px 0px 20px;
	height:470px;
}
.cont_right span{
	display:block;
	margin-left: 30px;
}
.blue_cont{
	background-color: #b9cde5;
    left: 20px;
    position: relative;
    width: 100%;
}
.org_cont{
	background-color: #FCD5B4;
    left: 20px;
    position: relative;
    width: 100%;
}
.cont{
	font-family: 標楷體;
    font-size: 16pt;
}
.cont a{
	text-decoration:none;
    color:#000;
}
.sdnl {
    background: url("images/sdnl.png") no-repeat;
	display:block;
	padding-left: 30px;
	padding-right: 30px;
}
.cont_content{
	font-size:16pt;
	color:#000;
	position: relative;
	font-weight: normal;
}

</style>
<div class='left_content' style="width:880px;">
			<div class='cont_title' style="width:880px;">
				<div class='index_title_num left'>1</div>
				<div class='title_top_index left'>

					<h1 class='left'><?php echo $title; ?></h1>

					<h2 class='right'></h2>

					<div class='clear'></div>

				</div><!--title_top_index-->

				<div class='title_line_index title_line_blue'></div>

					<div class='clear'></div>

				<div class='title_bottom'>

					<h3></h3>

				</div><!--title_bottom-->

			</div><!--cont_title-->
			<div class='cont'>
				<div class="cont_left">
			<div class="cont_content" style="padding-left: 20px;">有向數</div>
			<div class="blue_cont">
				<span class="sdnl"><div class="cont_content">數學家在數字前加上負號 (寫法和減號相同) 去處理不夠減的情況，而這種新類別的數稱為負數。</div></span>
				<span class="sdnl"><div class="cont_content">正數及負數合稱有向數，因除了絕對數值以外 (絕對數值就是不理會正負號的數值，描述該數的大小，例如 +5 和 –5 的絕對數值都是 5)，也提供一個方向的意義 (0 非正非負，不屬於有向數)。</div></span>
			</div>
			<div class="cont_content" style="padding-left: 20px;">有向數的加減運算</div>
			<div class="blue_cont">
				<span class="sdnl"><div class="cont_content">首先按規則撤去括號。</div></span>
				<span class="sdnl"><div class="cont_content">然後把相同符號的數值互相累積，相異符號的數值互相抵消。</div></span>
			</div>
			<div class="cont_content" style="padding-left: 20px;">有向數的乘除運算</div>
			<div class="blue_cont">
				<span class="sdnl"><div class="cont_content">有向數乘法計算法則：不理正負符號先計算乘積的絕對數值 (不理正負符號的數字數值)，再跟據規則決定正負： (+)(+) = (+)、 (+)(–) = (–)、 (–)(+) = (–) 及 (–)(–) = (+)</div></span>
				<span class="sdnl"><div class="cont_content">有向數除法計算法則跟有向數乘法相若。</div></span>
			</div>
			
			<div style="padding-left: 20px;margin-top:30px;">字詞索引</div>
			<div class="org_cont">
				<span><a href="page02.php">正數 負數 自然數</a></span>
				<span><a href="page07.php">有向數 正數 負數</a></span>
				<span><a href="page11.php">相反數 絕對值 自然數 整數 有向數 數線</a></span>
				<span><a href="page13.php">數線</a></span>
				<span><a href="page16.php">由大至小排列 由小至大排列 數線</a></span>
				<span><a href="page17.php">負數</a></span>
				<span><a href="page19.php">有向數</a></span>
			</div>
			
		  </div>
		    </div>
		</div><!--left_content-->
<?php include('./temp/right_tools.php'); ?>
<?php include('./temp/footer.php'); ?>



