<?php
header("Content-type: text/html; charset=utf-8");

$files=scandir('.');

//////////////////////////////////////////////////////////////
// Change range
$start='43_00';
$end='45_99';
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
    /*array_push($str1, '前備知識');
    array_push($str2, '有向數的乘除運算');
    array_push($str1, '4.1A&nbsp;&nbsp;<?php echo $title; ?>');
    array_push($str2, '1.4&nbsp;&nbsp;<?php echo $title; ?>');
    array_push($str1, '工作紙 4A', 'files/S304C_4A.pdf');
    array_push($str2, '工作紙 1D', 'files/S101C_1D.pdf');
    array_push($str1, '尺規作圖');
    array_push($str2, '1.4D 有向數四則計算');
    array_push($str1, '角平分線');
    array_push($str2, '有向數');*/
    array_push($str1, '100%"></div>');
    array_push($str2, '100%">有向數的四則運算是將前面所學的綜合運用，最重要留意計算次序，按部就班。</div>');
    //////////////////////////////////////////////////////////////

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} Replaced!!</h3>";

    file_put_contents($file, $f_con);
}

echo '<h2>Done!</h2>';
?>