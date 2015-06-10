<?php
header("Content-type: text/html; charset=utf-8");

$files=scandir('.');

//////////////////////////////////////////////////////////////
// Change range
$start='09_00';
$end='11_99';
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
    array_push($str2, '有向數');
    array_push($str1, '4.1A&nbsp;&nbsp;<?php echo $title; ?>');
    array_push($str2, '1.2&nbsp;&nbsp;<?php echo $title; ?>');
    array_push($str1, '工作紙 4A', 'files/S304C_4A.pdf');
    array_push($str2, '工作紙 1B', 'files/S101C_1B.pdf');
    array_push($str1, '尺規作圖');
    array_push($str2, '1.2B 正數和負數');
    array_push($str1, '角平分線');
    array_push($str2, '有向數&nbsp;&nbsp;&nbsp;&nbsp;正數&nbsp;&nbsp;&nbsp;&nbsp;負數');*/
    array_push($str1, '100%"></div>');
    array_push($str2, '100%">我們目前可以看到負號是以減號「-」表示 (同學可猜猜為何會選此符號)，例如 -5，有時更會寫成 (-5)。正數一般可以不寫符號，例如 7 就已代表正 7，但有時要特別強調其正的屬性時會寫成 +7 或 (+7) (同學也可再猜猜為何正號會以加號來表示)。本書以簡潔為取向，在不會引起誤會情況下，不用寫的負號或括號就會盡量不寫，例如﹕(+8)會寫為8，(-5)會寫為-5。</div>');
    //////////////////////////////////////////////////////////////

    $f_con=str_replace($str1,$str2,$html);


    echo "<h3>File: {$file} Replaced!!</h3>";

    file_put_contents($file, $f_con);
}

echo '<h2>Done!</h2>';
?>