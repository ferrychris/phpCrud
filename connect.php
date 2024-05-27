<?php
$conn = new mysqli('localhost', 'root','','crudoperation');
 if ($conn){
    echo "connection Resuccessful";
 }
 else{
    echo "connection unsuccessful";
    die(mysqli_error($conn));
 }

    ?>