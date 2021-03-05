<?php
// require data
// data format
// setup relation database
// write API document
// build API

$str = file_get_contents("./book_store_data.json");
$str = ltrim($str,"[");

$str = substr_replace($str,"",strrpos($str,","));
//strpos(string,find,start) 
$pos = strpos($str,'},',strpos($str,"storeName"));
//substr(string,start,length) 
echo substr($str,0,$pos);
//echo var_dump($str);

//while strrpos find position
//split string into array 

// $pattern = "/storeName/";
// echo preg_match_all($pattern, $str);

?>