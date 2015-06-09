<?php
header("Content-type: text/html; charset=utf-8");

$files=scandir('.');

//////////////////////////////////////////////////////////////
// Change range
$start='05_01';
$end='07_00';
//////////////////////////////////////////////////////////////

foreach($files as $file) if('page' == substr($file,0,4)) {
    if (false == strpos($file, '_')) {
        $code = substr($file,4,2);
        $code .= '_00';
    }
    else {
        $code = substr($file,4,5);
    }
    
    if ($code < $start || $code > $end) {
        echo "<h3>File: {$file} Ignored (Code={$code})</h3>";
        continue;
    }

    //echo "<h1>$file</h1>";
    $html=file_get_contents($file);

    $str1=array();
    $str2=array();
    //////////////////////////////////////////////////////////////
    // Change contents
    array_push($str1, '前備知識');
    array_push($str2, '負數的產生');
    array_push($str1, '4.1A&nbsp;&nbsp;<?php echo $title; ?>');
    array_push($str2, '1.1&nbsp;&nbsp;<?php echo $title; ?>');
    //array_push($str1, '工作紙 4A', 'files/S304C_4A.pdf');
    //array_push($str2, '工作紙 1A', 'files/S101C_1A.pdf');
    array_push($str1, '尺規作圖');
    array_push($str2, '1.1B 認識負數');
    array_push($str1, '角平分線');
    array_push($str2, '正數&nbsp;&nbsp;&nbsp;&nbsp;負數&nbsp;&nbsp;&nbsp;&nbsp;自然數');
    //////////////////////////////////////////////////////////////

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} Replaced!!</h3>";

    file_put_contents($file, $f_con);
}

echo '<h2>Done!</h2>';
?>