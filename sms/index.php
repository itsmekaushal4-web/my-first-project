<?php
session_start();
include('./functions/helper.php');

if(!is_user_logged_in()){
    header("Location: login.php");
    exit();
}

include('./templates/header.php');
include('./templates/navbar.php');

echo "Student Managemnet System";
echo "<br>";
echo "Welcome $_SESSION[username]";

include('./templates/foot.php');
?>