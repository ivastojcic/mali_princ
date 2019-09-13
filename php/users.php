<?php 

include 'connectionOOP.php';

$query = "SELECT * FROM user";

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row;
}

echo json_encode($data);

?>