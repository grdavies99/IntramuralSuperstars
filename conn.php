<!-- connect to the mariaDB database -->
<?php
$servername = "localhost";
$username = "phpuser";
$password = "pa55word";
$dbname = "intramuel";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";

?>