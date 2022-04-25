<?php
$saatler_array = array(
"0" => array("birinci"),
"1" => array("ikinci"),
"2" => array("üçüncü")
);

function option1($array, $db){
    if (is_array($array)){
        foreach ($array as $row => $value){
            $saatler_table = mysqli_real_escape_string($db, $value[0]);
        }
    }
}












/*
function option1($array, $db){
    if (is_array($array)){
        foreach ($array as $row => $value){
            $saatler_table = mysqli_real_escape_string($db, $value[0]);
            $sql="INSERT INTO saatler_array(saatler_table) VALUES ('".$saatler_table."')";
            mysqli_query($db, $sql);
        }
    }
}
option1($saatler_array,$db);
*/