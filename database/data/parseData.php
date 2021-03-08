<?php
// require data
// data format
// setup relation database
// write API document
// build API


//Read data
$str = file_get_contents("./book_store_data.json");

//Delete "[" and "]"
$str = ltrim($str,"[");
$str = substr_replace($str,"",strrpos($str,","));
//Get the first book store data end index; strpos(string,find,start) 
$pos = strpos($str,'},',strpos($str,"storeName"));
//Extract the first book store data; substr(string,start,length) 
$firstStore = substr($str,0,$pos)."}";
$firstObj = json_decode($firstStore); //json_decode return an obj
$firstArr = $firstObj->books;
foreach($firstArr as $value)
{
    echo $value->bookName;
    echo "\n";
}

// 1. Extract all bookStore

//echo var_dump($str);

//while strrpos find position
//split string into array 

// $pattern = "/storeName/";
// echo preg_match_all($pattern, $str);

?>