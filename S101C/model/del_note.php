<?php 
require_once('../temp/include.php');
if($_GET['action']=='delete' && !empty($_GET['id']))
{
	$db->delete('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and note_id="'.trim($_GET['id']).'"');
}
if($_GET['action']=='deletemark' && !empty($_GET['id']))
{
	$db->delete('bookmark','bm_user_id="'.trim($_COOKIE['etext_cookie']).'" and bm_id="'.trim($_GET['id']).'"');
}
if($_GET['action']=='deleteall' && !empty($_COOKIE['etext_cookie']))
{
	$db->delete('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and subject_id='.$subject_id);
}
if($_GET['action']=='delete_page_all' && !empty($_COOKIE['etext_cookie']) && !empty($_GET['page_id']))
{
	$db->delete('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and subject_id='.$subject_id.' and note_con_id="'.trim($_GET['page_id']).'"');
}
if($_GET['action']=='deleteall_mark' && !empty($_COOKIE['etext_cookie']))
{
	$db->delete('bookmark','bm_user_id="'.trim($_COOKIE['etext_cookie']).'" and bm_subject_id='.$subject_id);
}