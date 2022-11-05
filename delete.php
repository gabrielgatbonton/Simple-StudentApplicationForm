<?php
include 'connection.php';

if(!$conn){
    die('Connection Failed' . mysqli_connect_error());
}
else{
    $id = $_GET['id'];

    $sql = "DELETE FROM information WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        header("location: list.php");
    }
    else{
        echo "Delete Failed!";
    }
}
?>