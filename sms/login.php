<?php
session_start();
include('./templates/header.php');
include('./templates/navbar.php');
?>
<div class="login-page">

<?php
if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<div class='alert alert-success'>Registration successful! Please log in.</div>";
}

include('./templates/login.php');
?>
</div>

<?php
include('./templates/foot.php');
?>