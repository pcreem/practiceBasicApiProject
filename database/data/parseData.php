<?php
// require data
// data format
// setup relation database
// write API document
// build API


//Read data
$str = file_get_contents("./fake.json");

//Delete "[" and "]"
$str = ltrim($str,"[");
$str = substr_replace($str,"",strrpos($str,"]"));



    //Get the first book store data end index; strpos(string,find,start) 
    $endpos = strpos($str,'},',strpos($str,"storeName"));

    //Extract the first book store data; substr(string,start,length) 
    $firstStore = substr($str,0,$endpos+2);
    echo $firstStore;
    echo "\n";
    $str = substr($str,$endpos+2,strlen($str));

    $endpos = strpos($str,'},',strpos($str,"storeName"));
    $firstStore = substr($str,0,$endpos+2);
    echo $firstStore;
    echo "\n";
    $str = substr($str,$endpos+2,strlen($str));

    
    // $eliminateSpace = str_replace(" ","",$str);
    


//Extract the second book store data;
// $endpos = strpos($restStore,'},',strpos($restStore,"storeName"));
// $secondStore = substr($restStore,0,$endpos)."}";
// echo $secondStore;

// //Extract the books content
// $firstObj = json_decode($firstStore); //json_decode return an obj
// $firstArr = $firstObj->books;


// 1. Extract all bookStore

//echo var_dump($str);

//while strrpos find position
//split string into array 

// $pattern = "/storeName/";
// echo preg_match_all($pattern, $str);

?>