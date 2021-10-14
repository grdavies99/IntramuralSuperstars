<?php

session_start();

// include the database connection php page
// include 'db.php';

// save the Username and Password that were entered into variables
$username = $_POST['username'];
$password = $_POST['password'];

// sql query to select the user from the database
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// run the query
$result = mysqli_query($conn, $sql);

// if the query returns a result
if (mysqli_num_rows($result) > 0) {
    // save the result into a variable
    $row = mysqli_fetch_assoc($result);

    // save the user id into a session variable
    $_SESSION['user_id'] = $row['id'];

    // redirect the user to the home page
    header('Location: index.php');
} else {
    // if the query returns no result, redirect the user to the login page
    header('Location: login.php');
}

?>
