<?php require_once('./model/note.php'); ?>

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
		window.location.href="note.php?con_id=<?php echo $_GET['con_id'];?>&action=download";
	})
	$('#del_all_note').click(function (){
		if(confirm('是否移除當前頁面所有筆記?')){
			// alert('1');
			$.ajax
			({ 
			type: "get", 
			url : "model/del_note.php?action=delete_page_all&page_id=<?php echo $_GET['con_id'];?>",
			success: function(data)
			{
				$('.noteall').hide();
			}
			});
		}
	})
	$('.looknote').click(function (){
		str=$(this).attr('str');
		$(this).attr('str',$(this).html());
		$(this).html(str);
		return false;
	})
})
</script>
</head>

<body><form id="form1" name="form1" method="post" action="">
<table width="480" height="272" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php if(!empty($msg)){?>
  <tr>
    <td height="30"><span style="color:#8fb345;font-size:12px;" class="nomaltext"><?php echo $msg;?></span></td>
  </tr>
  <?php }?>
  <tr>
    <td height="30"><span class="nomaltext">筆記：</span></td>
  </tr>
<?php $i=1;if(!empty($result_data)){?>
    <?php foreach($result_data as $r_data){?>
	<tr id="note<?php echo $r_data['id'];?>" class="noteall"><td height="30"><span style=" padding: 10px 0px; display: block; word-wrap: break-word; word-break: break-all; width: 100%;" class="nomaltext"><?php echo $i;?> :<a href="javascript:;" str="<?php echo $r_data['note_desc'];?>" class="looknote">
	<?php if(strlen($r_data['note_desc'])>50){echo mb_substr($r_data['note_desc'],0,50,'utf-8').'...';}else{echo $r_data['note_desc'];}?></a></span></td><td width="10%"><img class="del_note" xid="<?php echo $r_data['id'];?>" src="./images/x.png" style="cursor: pointer;"></td></tr>
	<?php $i++;}?>
<?php }?>
  <tr>
    <td>
      <textarea name="note_description" cols="65" rows="5" ><?php //if($result_data)echo $result_data[0]['note_desc'];?></textarea>
	  <input type="hidden" name="title" value="<?php echo $_GET['title'];?>" />
    </td>
  </tr>
  <tr>
    <td width="966">
      <input type="submit" name="Submit" value="提交" />
      <input type="button" name="Download" id="download_file" value="下載筆記" />
      <input type="button" name="delete" id="del_all_note" value="刪除當前頁面所有筆記" />
    </td>
  </tr>
</table></form>
</body>
</html>
