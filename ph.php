<?php
session_start();
if ($_POST ['go']){
$filename = 'zay.txt' ;
$data = $_POST['username'].'#'.$_POST['work'].'#'.$_POST['tema'].'#'.$_POST['zag'].'#'.$_POST['ano'].'#'.$_POST['ss1'].'#'.$_POST['ss2'].'#'.$_POST['ss3'].'#'.$_POST['dol']."\n";
file_put_contents($filename, $data, FILE_APPEND) ;
} ?>