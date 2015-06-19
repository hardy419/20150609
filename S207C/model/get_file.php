<?php
	$num = $_POST['num'];//当前页数
	$current_page = $_POST['page'];//当前页面文件名
	
	$tree = scandir('../');
	$file_arr = array(); //返回数组
	$pattern = '/^page'.$num.'(.*)\.php$/';
	foreach($tree as $v){
		$matches = array();
		preg_match($pattern,$v,$matches);
		if(!empty($matches)){
			$file_arr[] = $v;
		}
	}
	
	//获取当前URL页面文件所在当前页（题）的位置
	$arr_len = count($file_arr);
	$position = '';
	
	foreach($file_arr as $k => $v){
		if($v == $current_page){
			switch($k){
				case '0':
					$position = 'first';
					break;
				case ($arr_len-1):
					$position = 'last';
					break;
				default:
					if($k>0 || $k < $arr_len){
						$position = 'continue';
					}else{
						$position = 'last';
					}
					break;
			}
		}
	}
	
	$ret_arr = array(
					'position'=>$position,
					'count_page'=>$arr_len,
					'current_num'=>$num
					);
	
	echo json_encode($ret_arr);
?>