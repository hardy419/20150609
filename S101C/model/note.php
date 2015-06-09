<?php 
require_once('./temp/include.php');
if($_GET['action']=='delete' && !empty($_GET['id']))
{
	$db->delete('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and note_id="'.trim($_POST['id']).'"');
}
if(!empty($_POST['note_description']))
{
	$note_description=addslashes($_POST['note_description']);
	$data=array();
	$data=array(
		'user_id' => trim($_COOKIE['etext_cookie']),
		'note_description' => $note_description,
		'note_con_id' => trim($_GET['con_id']),
		'subject_id' => 17,
		'section_id' => trim($_GET['section_id'])
	);
	// if($db->select('notes','user_id="'.$_COOKIE['etext_cookie'].'" and subject_id=1 and section_id="'.$_GET['section_id'].'"'))
	// {
		// $db->update('notes','user_id="'.$_COOKIE['etext_cookie'].'" and subject_id=1 and section_id="'.$_GET['section_id'].'"',$data);
	// }else
	// {
		$db->insert('notes',$data);
		$msg='新增筆記成功';
	// }
}



$note_result=$db->select('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and subject_id=17 and note_con_id="'.$_GET['con_id'].'" order by note_id desc');
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
	file_put_contents('./downloads/'.$temp_file_name.'.doc',$temp_file);
	header("Location: ./downloads/".$temp_file_name.'.doc');
	// unlink('./downloads/'.$temp_file_name.'.doc');
}
?>