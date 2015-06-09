<?php 
require_once('./temp/include.php');
$note_result=$db->select('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and subject_id=17 order by note_id desc');
$result_data=array();
foreach($note_result as $note_val)
{
	$files=scandir('./');
	foreach($files as $file)
	{
		if(strstr($file,'.php') && strstr($file,'page'))
		{
			$f_con=file_get_contents('./'.$file);
			if(strstr($f_con,'con_id="'.$note_val['note_con_id'].'"'))
			{
				$page_name=$file;
				continue;
			}
		}
	}
	$result_data[]=array(
		'note_desc' => $note_val['note_description'],
		'note_page' => $page_name
	);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type='text/css' href='css/p1add.css'/>
<title></title>
</head>

<table width="480" height="auto" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><span class="nomaltext">筆記：</span></td>
  </tr>
<?php $i=1;if(!empty($result_data)){?>
    <?php foreach($result_data as $r_data){?>
	<tr><td height="30"><span style=" padding: 10px 0;" class="nomaltext"><?php echo $i;?> :<a href="<?php echo $r_data['note_page'];?>" target="_top">
	<?php if(strlen($r_data['note_desc'])>50){echo mb_substr($r_data['note_desc'],0,25,'utf-8').'...';}else{echo $r_data['note_desc'];}?></a></span></td></tr>
	<?php $i++;}?>
<?php }?>
</table>
</body>
</html>
