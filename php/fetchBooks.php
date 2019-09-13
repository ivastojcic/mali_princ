<?php 

include 'connection.php';

if(mysqli_connect_errno()){
    echo 'Failed to connect to MySql '. mysqli_connect_errno();
}

$query = "SELECT * FROM books";

$result = mysqli_query($connect, $query);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($data);
?>