<?php

session_start();
$message=null;
$viewForm=true;
if(empty($_SESSION["rnd"])){
    $_SESSION["rnd"]=rand(1,10);
}

if(isste($_POST['send'])){
    $number=$_POST['number'];

    if($number=$_SESSION["rnd"]){
        $message="Tebrikler";
        $viewForm=false;
    }else if($number>$_SESSION["rnd"]){
        $message="Asagi";
    }else{
        $message="Yuxari";
    }
}