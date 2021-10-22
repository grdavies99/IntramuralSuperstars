<!-- connect to the mariaDB database -->
<?php
$servername = "";
$username = "phpuser";
$password = "pa55word";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";
?>