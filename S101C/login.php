<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo '有向數'; ?></title>
<link rel="stylesheet" type='text/css' href='./css/style.css'/>
<script type="text/javascript" src="./zDrag.js"></script>
<script type="text/javascript" src="./zDialog.js"></script>
<script type="text/javascript" src="./js/page.js"></script>
<script type="text/javascript" src="./js/jquery-1.8.3.min.js" ></script>
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
	diag.Width = 655;
	diag.Height = 554;
	diag.Title = "";
	diag.URL = "note.php";
	diag.show();
}
function open4()
{
	var diag = new Dialog();
	diag.Width = 655;
	diag.Height = 554;
	diag.Title = "";
	diag.URL = "mark.php";
	diag.show();
}

<?php
	if(isset($_GET['msg'])==1){
		echo "alert('用戶名或密碼輸入錯誤，請重新輸入')";
	}
?>

</script>
</head>
<body>

<div class="warpper login_bg">
<div style="position:absolute;margin:300px 0px 0px 350px; font-size:48px;color:blue; font-family:微软雅黑;">有向數</div>
	<div class='login'>
    
	<form method='post' action='do_login.php' name='login_form'>
		<input type='hidden' name='is_log' value='1' />
		<table cellspacing='10' cellpadding='0'>
			<tr>
				<td><img src='./images/log_name.png'/></td>
			</tr>
			<tr>
				<td><input class='input_txt' type='text' name='name' /></td>
			</tr>
			<tr>
				<td><img src='./images/log_psd.png'/></td>
			</tr>
			<tr>
				<td><input class='input_txt' type='password' name='pwd' /></td>
			</tr>
			<tr>
				<td><input class='sub_btn' type='submit' name='submit' value=''/></td>
			</tr>
		</table>
	</form>
	</div><!--login-->
</div><!--warpper-->
</body>
</html>
