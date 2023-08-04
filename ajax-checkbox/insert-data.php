<?php

$conn = mysqli_connect("localhost", "root", "", "testing")or die("connection failed");

$fname_name = $_POST['name'];
$language_name = $_POST['language'];

$sql = "INSERT INTO student(name, languages) VALUES('{$fname_name}', '{$language_name}')";

if(mysqli_query($conn, $sql)) {
   echo "successsfuly data saved";
}else {
    echo "Can't Saved form data";
}









?>