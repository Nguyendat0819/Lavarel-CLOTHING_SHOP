<?php 
    $conn = mysqli_connect('localhost','root','','form');
    if(!$conn){
        die("failed error:".mysqli_connect_error());
    }
?>