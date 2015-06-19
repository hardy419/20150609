<?php
	if(!isset($_COOKIE['etext_cookie'])){

		header('Location:./login.php');

	}
	require_once('include.php');
	if(isset($con_id))$bm=$db->select('bookmark','bm_user_id="'.$_COOKIE['etext_cookie'].'" and bm_subject_id='.$subject_id.' and bm_page_id="'.$con_id.'" limit 1');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $title; ?></title>

<link rel="stylesheet" type='text/css' href='./css/style.css'/>

<script type="text/javascript" src="./zDrag.js"></script>

<script type="text/javascript" src="./zDialog.js"></script>

<script type="text/javascript" src="./js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="../../../js/jquery.highlight-5.js" ></script>

<script type="text/javascript" src="./js/page.js"></script>

<script type="text/javascript" src="./js/changeWindowSize.js" ></script>

<script type="text/javascript">

function open2()

{

	var diag = new Dialog();

	diag.Width = 655;

	diag.Height = 554;

	diag.Title = "";

	diag.URL = "search.php";

	diag.show();

}

function open3()

{

	var diag = new Dialog();
	
	var title=$('h2').text();
				
	title="頁: <?php $title_name=explode('_',str_replace('page','',str_replace('.php','',substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1))));echo $title_name[0];?>";

	diag.Width = 655;

	diag.Height = 554;

	diag.Title = "";

	diag.URL = "note.php?con_id=<?php echo $con_id;?>&title="+title;

	diag.show();

}

function open4()

{

		$(document).ready(function ()
		{
			// alert($('.tl_bookmark_btn').attr('s'));
			if($('.tl_bookmark_btn').attr('s')=='0')
			{
				var title=$('h2').text();
				
				title="頁: <?php $title_name=explode('_',str_replace('page','',str_replace('.php','',substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1))));echo $title_name[0];?>";
				
				// title=title.replace('&nbsp;','');
				// title=title.replace('&nbsp;','');
				// title=title.replace('&nbsp;','');
				// title=title.replace('&nbsp;','');
				$('.tl_bookmark_btn').css('background-image','url("images/images/tl_bookmark_t.png")');
				$.ajax
				({ 
				type: "post", 
				data: 'title='+title,
				url : "model/mark.php?page=<?php echo $con_id;?>&user=<?php echo $_COOKIE['etext_cookie'];?>&subject=<?PHP echo $subject_id; ?>&action=update",
				success: function(data)
				{
					$('.tl_bookmark_btn').attr('s',1);
				}
				});
				
			}else
			{
				$('.tl_bookmark_btn').css('background-image','url("images/images/tl_bookmark.png")');
				$.ajax
				({ 
				type: "get", 
				url : "model/mark.php?page=<?php echo $con_id;?>&user=<?php echo $_COOKIE['etext_cookie'];?>&subject=<?PHP echo $subject_id; ?>&action=delete",
				success: function(data)
				{
					$('.tl_bookmark_btn').attr('s',0);
				}
				});
			}
		})

}

function open5()



{



	var diag = new Dialog();



	diag.Width = 800;



	diag.Height = 600;



	diag.Title = "";



	diag.URL = "triangle_1.html";



	diag.show();



}
function open6()

{

	var diag = new Dialog();

	diag.Width = 655;

	diag.Height = 554;

	diag.Title = "";

	diag.URL = "note_top.php?con_id=<?php echo $con_id;?>";

	diag.show();

}
function open7()

{

	var diag = new Dialog();

	diag.Width = 655;

	diag.Height = 554;

	diag.Title = "";

	diag.URL = "mark.php";

	diag.show();

}
function btnPrintClick(){
	window.print();
	 }
	 
	 $(function(){
	$('.application').click(function(){
		open5();
		})
	})
</script>

</head>

<body>

<div class="warpper">

	<div class='content'>

	<div class='warp_header'>

		<div class='tool_bg_warp'>

			<div class='tool_bg_l'>

			</div><!--tool_bg_l-->

			<div class='tool_bg_c'>

				<div class='tool_div' style='padding-left:14px;padding-top:2px;'>

				   <a id='TB' class='tl_plus_btn' href="javascript:;" title="放大"></a>

				   <a id='TS' class='tl_subtraction_btn' href="javascript:;" title="縮小"></a>

				</div><!--tool_div-->

				<div class='tool_div' style='margin-left:45px;'>

					<input id='currentPage' class='tl_ipt_num' name="currentPage" type="text" title="當前頁" >

					<div class='tl_arrow_img'></div>

					<input id='setPage' class='tl_ipt_num' name="setPage" type="text" value="" onkeyup="urlPage_do();" title="目標頁">

				</div><!--tool_div-->

				<div class='tool_div' style='margin-left:35px;'>

					<a onclick="urlPage2('home');" href="javascript:;" class="tl_front_btn" title="首頁" target="_self"></a>

					<a onclick="urlPage2('prev');" href="javascript:;" class="tl_back_btn" title="上一頁" target="_self"></a>

					<a onclick="urlPage2('next');" href="javascript:;" class="tl_next_btn" title="下一頁" target="_self"></a>

					<a onclick="urlPage2('last');" href="javascript:;" class="tl_last_btn" title="末頁" target="_self"></a>
					<input type="hidden" name="get_position" class="get_position">
					<input type="hidden" name="get_count" class="get_count">

				</div><!--tool_div-->

				<div class='tool_div' style='margin-left:36px;'>

					<a class='tl_search_btn' href="javascript:open2();" title="搜索"></a>
					
					<a class='tl_bookmark_btn' href="javascript:;" onclick="open4()" <?php echo !empty($bm)?'style=\'background-image: url("images/images/tl_bookmark_t.png");\'':'';?> s="<?php echo empty($bm)?'0':'1';?>" title="書簽"></a>

					<a class='tl_bookmark_m_btn' href="javascript:;" onclick="open7()" title="書籤管理"></a>

				    <a class='tl_print_btn' href="javascript:btnPrintClick();" title="打印"></a>

				    <a class='tl_notes_btn' href="javascript:;" onclick="open6()" title="筆記管理"></a>

				    <a class='tl_pdf_btn' href="./files/<?PHP echo $pdf_file; ?>" title="pdf" target="_blank"></a>
					
				    <a class='tl_dictionary_btn' href="https://hk.dictionary.yahoo.com/" title="詞典" target="_blank"></a>
					
				    <a class='tl_list_btn' href="../../index_new.html" title="目錄"></a>

				</div><!--tool_div-->

			</div><!--tool_bg_c-->

			<div class='tool_bg_r'>

			</div><!--tool_bg_r-->

		</div><!--tool_bg_warp-->

	</div><!--warp_header-->

		<div class='blank_line'><img src="./images/

		<?php echo $line_img; ?>.jpg" alt="left_side" /></div>