<?php
// require data
// data format
// setup relation database
// write API document
// build API

$str = file_get_contents("./book_store_data.json");
$str = ltrim($str,"[");
$str = substr_replace($str,"",strrpos($str,","));
echo $str;
// var_dump(json_decode($str));
// $json[] = $str;
// foreach ($json as $string) {
//     echo 'Decoding: ' . $string;
//     json_decode($string);

//     switch (json_last_error()) {
//         case JSON_ERROR_NONE:
//             echo ' - No errors';
//         break;
//         case JSON_ERROR_DEPTH:
//             echo ' - Maximum stack depth exceeded';
//         break;
//         case JSON_ERROR_STATE_MISMATCH:
//             echo ' - Underflow or the modes mismatch';
//         break;
//         case JSON_ERROR_CTRL_CHAR:
//             echo ' - Unexpected control character found';
//         break;
//         case JSON_ERROR_SYNTAX:
//             echo ' - Syntax error, malformed JSON';
//         break;
//         case JSON_ERROR_UTF8:
//             echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
//         break;
//         default:
//             echo ' - Unknown error';
//         break;
//     }

//     echo PHP_EOL;
// }
?>