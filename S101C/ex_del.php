<?php
header("Content-type: text/html; charset=utf-8");

$files=scandir('.');

//////////////////////////////////////////////////////////////
// The page num to delete
$n = $_GET['n'];
//////////////////////////////////////////////////////////////

// first delete the file
unlink("page{$n}.php");

$ncode = $n.'_00';

// Reduce all page nums that are greater than the deleted page num by 1
// Also need to change the map link within the html
foreach($files as $file) if('page' == substr($file,0,4)) {
    if (false == strpos($file, '_')) {
        $code = substr($file,4,2);
        $code .= '_00';
    }
    else {
        $code = substr($file,4,5);
    }
    
    if ($code <= $ncode) {
        echo "<h3>File: {$file} nothing to do..</h3>";
        continue;
    }

    $this_num = substr($file,4,2);
    $new_num = sprintf("%'02d", ((int) $this_num) - 1);
    $new_file = "page{$new_num}".substr($file,6,strlen($file)-6);

    $html=file_get_contents($file);

    $str1=array('href="./page'.$this_num);
    $str2=array('href="./page'.$new_num);

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} --> {$new_file} </h3>";

    file_put_contents($new_file, $f_con);
}

echo '<h2>Done!</h2>';
?>