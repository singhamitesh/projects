<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$ContactNumber= $_POST['ContactNumber'];
$EMAIL= $_POST['EMAIL'];
$BIRTHDAY = $_POST['BIRTHDAY'];
$HEIGHT = $_POST['HEIGHT'];
$WEIGHT= $_POST['WEIGHT'];
$GENDER= $_POST['GENDER'];

//DATABASE CONNECTION
$conn = new mysqli('localhost','root',' ','registration_db');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(FirstName, LastName, ContactNumber, EMAIL, BIRTHDAY, HEIGHT, WEIGHT, GENDER) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt ->bind_param("ssisssss",$FirstName, $LastName, $ContactNumber, $EMAIL, $BIRTHDAY, $HEIGHT, $WEIGHT, $GENDER);
    $stmt->execute();
    echo "registration successfull";
    $stmt ->close();
    $conn ->close();
}

?>