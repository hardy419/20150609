<?php require_once('temp/include.php'); 
header("Content-type: text/html; charset=utf-8");
if($_GET['user']!=='fish')
{
	header('Location:./index.php');
}
//$file_arr=array('1'=>'etext_F1_Ch6_Statistics_Chi','2'=>'etext_F1_Ch6_Statistics_Eng','3'=>'etext_F2_Statistics_chi','4'=>'etext_F2_Statistics_eng','5'=>'Percentage','6'=>'Percentage_en','7'=>'percentage_F3_chi','8'=>'percentage_F3_eng','9'=>'etext/etext_F1_coordinate.geometry','10'=>'etext/etext_F1_coordinate.geometry_EN','11'=>'etext/etext_F3_trigo','12'=>'etext/etext_F3_trigo_EN');
$file_arr=array(''.$subject_id=>'.');
foreach($file_arr as $f_key=>$f_val)
{
	$files=scandir($f_val);
	// print_r($files);die;
	foreach($files as $file)
		{
			if(strstr($file,'.php') && strstr($file,'page') &&!strstr($file,'bak'))
			{
				$f_con=file_get_contents('./'.$f_val.'/'.$file);
				// print_r($f_con);die;
				$f_arr=explode('<h3 class="right" style="color:#984807">',$f_con);
				$f_arr=explode('</h3>',$f_arr[1]);
				// print_r($f_arr);die;
				$preg1='/<h2(.)*<\/h2>/';
				preg_match_all($preg1,$f_con,$h_arr1);
				$title=str_replace('"','&quot;',strip_tags($h_arr1[0][0]));
				
				// $t_arr=explode('<h2 class=\'left fontweight_normal\'>',$f_con);
				// $t_arr=explode('</h2>',$t_arr[1]);
				// print_r($t_arr);die;
				$preg='/<h1(.)*<\/h1>/';
				preg_match_all($preg,$f_con,$h_arr);
				$title1=str_replace('"','&quot;',strip_tags($h_arr[0][0]));
				$k_arr=explode('$title = \'',$f_con);
				$k_arr=explode('\'',$k_arr[1]);
				$title2=str_replace('"','&quot;',$k_arr[0]);
				$key=str_replace('&nbsp;&nbsp;&nbsp;&nbsp;',',',$f_arr[0]);
				// echo $title1.$title2.' - '.$title.'<br>';
				// echo htmlentities('"\'');die;
				
				if(trim($key)!='')
				{
					echo 'INSERT INTO `search` (`search_id`, `search_keyword`, `search_title`, `search_url`, `subject_id`) VALUES (NULL, "'.trim($key).'", "'.$title1.$title2.' - '.$title.'", "'.$file.'", "'.$f_key.'");
					';
				}
			}
		}
}
?>