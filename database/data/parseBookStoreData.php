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
$str = substr_replace($str,"",strrpos($str,"]"));
$endpos = 5;

//Process data into json formate
while($endpos > 4){
    $endpos = strpos($str,',',strpos($str,"storeName"));
    $firstStore = substr($str,0,$endpos);
    
    if($endpos > 0){
        $firstObj = json_decode($firstStore); 
        $firstArr = $firstObj->books;
        // print_r($firstArr);
        echo $firstStore;
        echo "\n---------------\n";
    }

    $str = substr($str,$endpos+2,strlen($str));
}
?>