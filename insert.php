<?php

header('Content-Type:application/json');
header('Acess-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"),true);

$age=$data['age'];
$name=$data['name'];
$city=$data['city'];

include "config.php";

$sql = "insert into student(age,Student_name,city) values('$age','$name','$city')";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if($result){

   
    echo json_encode(array('message' => 'Record inserted.' , 'status' => TRUE));

}else{
    echo json_encode(array('message' => 'Record Not inserted.' , 'status' => false));
}