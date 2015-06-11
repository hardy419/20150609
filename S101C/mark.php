<?php
require_once('./temp/include.php');
	$mark_result=$db->select('bookmark','bm_user_id="'.$_COOKIE['etext_cookie'].'" and bm_subject_id='.$subject_id);
	$result_data=array();
	foreach($mark_result as $mark_val)
	{
		$files=scandir('./');
		foreach($files as $file)
		{
			if(strstr($file,'.php') && strstr($file,'page'))
			{
				$f_con=file_get_contents('./'.$file);
				if(strstr($f_con,'con_id="'.$mark_val['bm_page_id'].'"'))
				{
					$page_name=$file;
					continue;
				}
			}
		}
		$result_data[]=array(
			'id'		=> $mark_val['bm_id'],
			'bm_title' => $mark_val['bm_title'],
			'bm_page' => $page_name
		);
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
		url : "model/del_note.php?action=deletemark&id="+id,
		success: function(data)
		{
			$('#note'+id).hide();
		}
		});
	})
	$('#del_all_note').click(function (){
		if(confirm('是否移除所有書簽?')){
			// alert('1');
			$.ajax
			({ 
			type: "get", 
			url : "model/del_note.php?action=deleteall_mark",
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

<body>
<table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="53"><span class="page03_bold">書簽：</span></td>
  </tr>
  <?php $i=1;if(!empty($result_data)){?>
    <?php foreach($result_data as $r_data){?>
	<tr id="note<?php echo $r_data['id'];?>" class="noteall"><td height="30" width="90%"><span style=" padding: 10px 0;" class="nomaltext"><?php echo $i;?> :<a href="<?php echo $r_data['bm_page'];?>" target="_top">
	<?php if(strlen($r_data['bm_title'])>50){echo mb_substr($r_data['bm_title'],0,25,'utf-8').'...';}else{echo $r_data['bm_title'];}?></a></span></td><td width="10%"><img class="del_note" xid="<?php echo $r_data['id'];?>" src="./images/x.png" style="cursor: pointer;"></td></tr>
	<?php $i++;}?>
<?php }?>
  <tr>
    <td width="966">
      <input type="button" name="delete" id="del_all_note" value="刪除所有書簽" />
    </td>
  </tr>
</table>
</body>
</html>
