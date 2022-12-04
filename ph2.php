<?php
session_start();
if ($_POST ["go"]){
$filename = 'rez.txt' ;
$data = 
$_POST['score'].'#'
file_put_contents($filename, $data, FILE_APPEND) ;
} ?>