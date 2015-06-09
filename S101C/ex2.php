<?php
require 'gjPhone.class.php';

// Image processing
header("Content-type: text/html; charset=utf-8");
/*
$file = './images/page/31.jpg';
$cimg = new gjPhone($file);
$cimg->searchImg('./images/purple_arrow.jpg');
echo "<h1>{$cimg->foundImgPosX}, {$cimg->foundImgPosY}</h1>";
*/
$files=scandir('./images/page/');

foreach($files as $file) if('.'!=$file && '..'!=$file){
    //echo "<h1>$file</h1>";
    $img = new gjPhone('./images/page/'.$file);

    //$img->getHec();

    $new_file = substr($file, 5, strlen($file)-5);
    $img->saveClip('./images/page/'.$new_file, 54, 208, 1500, 1125);
}

echo '<h2>Done!</h2>';
?>