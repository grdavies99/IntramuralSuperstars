<?php
require("conn.php");
    
    $team = filter_input(INPUT_GET, 'team');
    $sql = "UPDATE users SET team_Id = '$team' WHERE userId = $_SESSION['user_id']";
    

?>