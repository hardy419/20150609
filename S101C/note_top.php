<?php 
require_once('./temp/include.php');
$note_result=$db->select('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and subject_id='.$subject_id.' order by note_id desc');
$result_data=array();
$temp_file='';
$temp_num=1;
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
		'id'		=> $note_val['note_id'],
		'note_desc' => $note_val['note_description'],
		'note_page' => $page_name
	);
	$temp_file.=$temp_num.' - '.$note_val['note_description']."\n";
	$temp_num++;
}
if($_GET['action']=='download')
{
	if(empty($temp_file))return false;
	$temp_file_name=mktime().$_COOKIE['etext_cookie'].$_GET['con_id'];
	file_put_contents('./downloads/'.$temp_file_name.'.txt',$temp_file);
	// header("Location: ./downloads/".$temp_file_name.'.txt');
	$filename="./downloads/".$temp_file_name.'.txt';
	header("Content-Type: application/force-download");
	header("Content-Disposition: attachment; filename=".basename($filename));
	readfile($filename);exit;
	
	// header("Location: ./downloads/".$temp_file_name.'.txt');
	// unlink('./downloads/'.$temp_file_name.'.txt');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type='text/css' href='css/p1add.css'/>
<title></title>
<script type="text/javascript" src="./js/jquery-1.8.3.min.js" ></script>
<script>
$().ready(function (){
	$('.del_note').click(function (){
		var id=$(this).attr('xid');
		// alert('1');
		$.ajax
		({ 
		type: "get", 
		url : "model/del_note.php?action=delete&id="+id,
		success: function(data)
		{
			$('#note'+id).hide();
		}
		});
	})
	$('#download_file').click(function (){
		window.location.href="note_top.php?con_id=<?php echo $_GET['con_id'];?>&action=download";
	})
	$('#del_all_note').click(function (){
		if(confirm('是否移除所有筆記?')){
			// alert('1');
			$.ajax
			({ 
			type: "get", 
			url : "model/del_note.php?action=deleteall",
			success: function(data)
			{
				$('.noteall').hide();
			}
			});
		}
	})
})
</script>
</head>

<table width="480" height="auto" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><span class="nomaltext">筆記：</span></td>
  </tr>
<?php $i=1;if(!empty($result_data)){?>
    <?php foreach($result_data as $r_data){?>
	<tr id="note<?php echo $r_data['id'];?>" class="noteall"><td height="30" width="90%"><span style=" padding: 10px 0;" class="nomaltext"><?php echo $i;?> :<a href="<?php echo $r_data['note_page'];?>" target="_top">
	<?php if(strlen($r_data['note_desc'])>50){echo mb_substr($r_data['note_desc'],0,25,'utf-8').'...';}else{echo $r_data['note_desc'];}?></a></span></td><td width="10%"><img class="del_note" xid="<?php echo $r_data['id'];?>" src="./images/x.png" style="cursor: pointer;"></td></tr>
	<?php $i++;}?>
<?php }?>

  <tr>
    <td width="966">
      <input type="button" name="Download" id="download_file" value="下載筆記" />
      <input type="button" name="delete" id="del_all_note" value="刪除所有筆記" />
    </td>
  </tr>
</table>
</body>
</html>
