<?php
require 'gjPhone.class.php';

set_time_limit(0);

// Image processing
header("Content-type: text/html; charset=utf-8");

$files=scandir('./images/page/');

foreach($files as $file) if('.'!=$file && '..'!=$file){
    $img = new gjPhone('./images/page/'.$file);

	$rename=explode('-',$file);
    $new_file = preg_replace ('/^[0]+/', '', $rename[1]);

    $img->saveClip('./images/page/'.$new_file, 54, 208, 1500, 1125);
}

echo '<h2>Done!</h2>';
?>