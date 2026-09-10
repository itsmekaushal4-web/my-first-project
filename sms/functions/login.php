<?php 
session_start();
include 'config.php';
$errors=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        $errors["email"] = "Email is required!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "Invalid email format!";
    }

    if(empty($password)){
        $errors["password"] = "Password is required!";
    }elseif(strlen($password) < 8){
        $errors["password"] = "Password must be at least 8 characters!";
    }

    if(empty($errors)){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            if(password_verify($password, $user['password'])){
                $_SESSION['username'] = $user['fname'];
                header("Location: ../dashboard.php");
                exit();
            }else{
                $errors["login"] = "Invalid password!";
            }
        }else{
            $errors["login"] = "Invalid email!";
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: ../login.php");
    exit();
}