<?php
function connect($dbname){
    $servername = "localhost";
    $username ="root";
    $password = "";
    if($dbname == ""){
        $conn = new mysqli($servername, $username, $password);
    }else{
        $conn = new mysqli($servername, $username, $password, $dbname);
    }
    if ($conn->connect_error) {
        die("Failded:" . $conn->connect_error);
    }else{
        return $conn;
    }
}
?>