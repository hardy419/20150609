<?php
header("Content-type: text/html; charset=utf-8");

$files=scandir('.');
$files=array_reverse($files);

//////////////////////////////////////////////////////////////
// The page code to insert
$c = $_GET['c'];
//////////////////////////////////////////////////////////////

$n = substr($c,0,2);
$ncode = $n.'_99';

// Increase all page nums that are greater(equal to) than the deleted page num by 1
// Also need to change the map link within the html
foreach($files as $file) if('page' == substr($file,0,4)) {
    if (false == strpos($file, '_')) {
        $code = substr($file,4,2);
        $code .= '_00';
    }
    else {
        $code = substr($file,4,5);
    }
    
    if ($code < $ncode) {
        echo "<h3>File: {$file} nothing to do..</h3>";
        continue;
    }

    $this_num = substr($file,4,2);
    $new_num = sprintf("%'02d", ((int) $this_num) + 1);
    $new_file = "page{$new_num}".substr($file,6,strlen($file)-6);

    $html=file_get_contents($file);

    $str1=array('href="./page'.$this_num);
    $str2=array('href="./page'.$new_num);

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} --> {$new_file} </h3>";

    file_put_contents($new_file, $f_con);
    unlink($file);
}

// Move $c to a new page num
if (strlen($c) == 2) {
    $file = "page{$c}.php";
    $this_num = $c;
    $new_num = sprintf("%'02d", ((int) $c) + 1);
    $new_file = "page{$new_num}.php";

    $html=file_get_contents($file);

    $str1=array('href="./page'.$this_num);
    $str2=array('href="./page'.$new_num);

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} --> {$new_file} </h3>";

    file_put_contents($new_file, $f_con);
    unlink($file);

    $j = 1;
    $z = 0;
}
else {
    $j = ((int) substr($c,3,2));
    $z = $j;
}
while(file_exists('page'.$n.'_'.sprintf("%'02d", $j).'.php')) {
    $file = "page{$n}_".sprintf("%'02d", $j).".php";
    $this_num = $n;
    $new_num = sprintf("%'02d", ((int) $n) + 1);
    $new_snum = (0==$j-$z)?'':sprintf("_%'02d", $j-$z);
    $new_file = "page{$new_num}{$new_snum}.php";

    $html=file_get_contents($file);

    $repos = strpos($html, 'href="./page');
    if(false!==$repos) {
        $str1=array(substr($html,$repos,17));
        $str2=array('href="./page'.$new_num.'_'.sprintf("%'02d", ((int)substr($html,$repos+15,2))-$z));

        $f_con=str_replace($str1,$str2,$html);
    }
    else {
        $f_con = $html;
    }

    echo "<h3>File: {$file} --> {$new_file} </h3>";

    file_put_contents($new_file, $f_con);
    unlink($file);

    $j++;
}

echo '<h2>Done!</h2>';
?>