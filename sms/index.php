<?php
session_start();
include('./templates/header.php');
include('./templates/navbar.php');

echo "Student Managemnet System";
echo "<br>";
echo "Welcome $_SESSION[username]";

include('./templates/foot.php');
?>