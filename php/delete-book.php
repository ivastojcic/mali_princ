<?php 

$connect = mysqli_connect("localhost", "root", "", "mobshop");
$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0) {
    $id = $data->id;
    $query = "DELETE FROM `books` WHERE `books`.`id` = $id";
    if(mysqli_query($connect, $query)){
        header("location:../myBooks.php");
    } else {
        header("location:../index.php");
    }
}

mysqli_close($connect);

?>