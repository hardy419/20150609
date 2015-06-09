<?php 
require_once('../temp/include.php');
if($_GET['action']=='delete' && !empty($_GET['id']))
{
	$db->delete('notes','user_id="'.trim($_COOKIE['etext_cookie']).'" and note_id="'.trim($_GET['id']).'"');
}