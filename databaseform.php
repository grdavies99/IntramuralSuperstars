<?php

$teamname = $_POST['teamname'];
$players = $_POST['players'];
$captainname = $_POST['captainname'];
$captainphone = $_POST['captainphone'];
$captainid = $_POST['captainid'];

$servername = "localhost";
$username = "phpuser";
$password = "pa55word";
$dbname = "intramuel";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully - ";

$sql = "insert into teaminfo(TeamName,TeamMembers,TeamCaptainName,TeamCaptainPhone,TeamCaptainID)
 values('$teamname','$players','$captainname','$captainphone','$captainid')";

if ($conn->query($sql) === TRUE) {
        echo "ADDED: ".$teamname.", ".$players.", ".$captainname.", ".$captainphone.", ".$captainid;
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>