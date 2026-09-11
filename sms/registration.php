<?php
session_start();
include('./functions/helper.php');

include('./templates/header.php');
include('./templates/navbar.php');
?>
<div class="register-page">

<?php
include('./templates/register.php');
?>
</div>

<?php

include('./templates/foot.php');
?>