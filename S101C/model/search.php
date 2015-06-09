<?php 
require_once('./temp/include.php');

if(!empty($_POST['keyword']))
{
	$keyword=addslashes($_POST['keyword']);
	$result=$db->select('search','subject_id=17 and search_keyword like "%'.$keyword.'%" order by search_id desc');
	// print_r($result);die;
	$result_data=array();
	foreach($result as $val)
	{
		$result_data[]=array(
			'search_title' 	=> $val['search_title'],
			'search_url'	=> $val['search_url']
		);
	}
}
?>