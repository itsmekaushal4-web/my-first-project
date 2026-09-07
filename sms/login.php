<?php
include('./templates/header.php');
include('./templates/navbar.php');

if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div class='alert alert-success'>Registration successful! Please log in.</div>";
}
echo "Login Page";

include('./templates/foot.php');
?>