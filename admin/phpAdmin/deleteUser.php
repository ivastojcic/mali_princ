<?php 

include 'connection.php';
$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0) {
    $id = $data->id;
    $query = "DELETE FROM `user` WHERE `user`.`id` = $id";
    if(mysqli_query($connect, $query)){
        header("location:../users.php");
    } else {
        echo 'ERROR';
    }
}

mysqli_close($connect);

?>