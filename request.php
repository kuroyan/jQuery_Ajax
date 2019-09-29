<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_GET['userid']) ){
        $id = $_GET['userid'];
        //$pas = $_GET['passward'];
        $str = "AJAX REQUEST SUCCESS\nuserid:".$id."\n";
        $result = nl2br($str);
        echo $result;
    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>
