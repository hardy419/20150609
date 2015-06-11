<?php
require_once('./temp/include.php');
	if(!isset($_POST['is_log']) || isset($_POST['is_log']) && $_POST['is_log'] != 1 ){
		header('Location:./login.php');
	}else{
	$user_name=addslashes(trim($_POST['name']));
	$user_pwd=addslashes(trim($_POST['pwd']));
	$result=$db->select('users','user_name="'.$user_name.'" and user_password="'.md5($user_pwd).'"');
		if($result){
			setcookie('etext_cookie',$result[0]['user_id']);
			// $bm=$db->select('bookmark','bm_user_id="'.$result[0]['user_id'].'" and bm_subject_id=1 limit 1','bm_page_id');
			// var_dump($bm);die;
			// if($bm[0]['bm_page_id'])
			// {
				// $files=scandir('./');
				// foreach($files as $file)
				// {
					// if(strstr($file,'.php') && strstr($file,'page'))
					// {
						// $f_con=file_get_contents('./'.$file);
						// if(strstr($f_con,'con_id="'.$bm[0]['bm_page_id'].'"'))
						// {
							// $page_name=$file;
							// continue;
						// }
					// }
				// }
				// header('Location:./'.$page_name);
			// }else
			// {
				header('Location:./index.php');
			// }
		}else{
			header('Location:./login.php?msg=1');
		}
	}
?>