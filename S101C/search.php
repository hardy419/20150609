<?php require_once('./model/search.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type='text/css' href='css/p1add.css'/>
<title></title>
</head>

<body><form id="form1" name="form1" method="post" action="">
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="53"><span class="nomaltext">搜索：</span></td>
  </tr>
  <?php if(!empty($result_data)){?>
    <?php foreach($result_data as $r_data){?>
	<tr><td height="30"><span class="nomaltext"><a href="<?php echo $r_data['search_url'];?>" target="_top"><?php echo $r_data['search_title'];?></a></span></td></tr>
		<tr><td height="20"></td></tr>
	<?php }?>
<?php }?>
  <tr>
    <td>
      <textarea name="keyword" cols="50" rows="1"></textarea>
    </td>
  </tr>
</table>
<table width="480" height="72" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="966">
      <input type="submit" name="Submit" value="提交" />
        </td>
  </tr>
</table></form>
</body>
</html>
