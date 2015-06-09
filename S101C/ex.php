<?php
require 'gjPhone.class.php';

header("Content-type: text/html; charset=utf-8");
// $files=scandir('./images/page/');
$a=0;
$c=1;
// foreach($files as $file){
	// if($file!='.' || $file!='..'){
		// $f_img=file_get_contents('./images/page/'.$file);
		
		// $rename=str_replace('imgS112C','',$file);
		
		// file_put_contents('./images/pages/'.$rename,$f_img);
	// }
// }

// $new_array=array();
// foreach($files as $file)
// {
	// if($file!='.' && $file!='..'){
	// $key_name=str_replace('.jpg','',$file);
	// $new_array[$key_name]=$file;
	// }
// }
// print_r($new_array);die;
$html=file_get_contents('templ.txt');
$found_arrow = false;
$pnum = 1;
$psnum = 1;
$i = 2;
while(file_exists ("./images/page/{$i}.jpg"))
{
    $file = "{$i}.jpg";

	$key_name=str_replace('.jpg','',$file);

    $src_img = './images/page/'.$file;
    $cimg = new gjPhone($src_img);
    $cimg->searchImg('./images/purple_arrow.jpg');
    if (-1 != $cimg->foundImgPosX) {
        $ratio = 1446/850;
        $coords_left = ( $cimg->foundImgPosX-10 ) / $ratio;
        $coords_top = ( $cimg->foundImgPosY-5 ) / $ratio;
        $coords_right = ( $cimg->foundImgPosX+18 ) / $ratio;
        $coords_bottom = ( $cimg->foundImgPosY+23 ) / $ratio;
        $coords = "{$coords_left},{$coords_top},{$coords_right},{$coords_bottom}";

        if (!$found_arrow) {
            ++$pnum;
        }
        
        $str1=array('##id##','##img##','##area##');
        $str2=array($key_name-1,$key_name,'<area shape="rect" coords="'.$coords.'" href="'.sprintf("./page%'.02d_%'.02d.php", $pnum, $psnum).'">');
        $f_con=str_replace($str1,$str2,$html);
        
        if ($found_arrow) {
            file_put_contents(sprintf("./page%'.02d_%'.02d.php", $pnum, $psnum-1), $f_con);
            echo "<h2>Src file: {$file} --> ".sprintf("./page%'.02d_%'.02d.php", $pnum, $psnum-1)."</h2>";
            echo "<h3>coords: {$coords}</h3>";
        }
        else {
            file_put_contents(sprintf("./page%'.02d.php", $pnum), $f_con);
            echo "<h2>Src file: {$file} --> ".sprintf("./page%'.02d.php", $pnum)."</h2>";
            echo "<h3>coords: {$coords}</h3>";
        }

        $found_arrow = true;
        $psnum++;
    }
    else {
        $str1=array('##id##','##img##','##area##');
        $str2=array($key_name-1,$key_name,'');
        $f_con=str_replace($str1,$str2,$html);

        if ($found_arrow) {
            file_put_contents(sprintf("./page%'.02d_%'.02d.php", $pnum, $psnum-1), $f_con);
            echo "<h2>Src file: {$file} --> ".sprintf("./page%'.02d_%'.02d.php", $pnum, $psnum-1)."</h2>";
        }
        else {
            file_put_contents(sprintf("./page%'.02d.php", ++$pnum), $f_con);
            echo "<h2>Src file: {$file} --> ".sprintf("./page%'.02d.php", $pnum)."</h2>";
        }

        $found_arrow = false;
        $psnum = 1;
    }

    $i++;
}
?>