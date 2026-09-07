<?php 
session_start();
include 'config.php';
$errors=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($fname)){
        $errors["fname"] = "First name is required!";
    }elseif(strlen($fname) < 3){
        $errors["fname"] = "First name must be at least 3 characters!";
    }

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

    if(empty($confirm_password)){
        $errors["confirm_password"] = "Please confirm your password!";
    }elseif($password !== $confirm_password){
        $errors["confirm_password"] = "Passwords do not match!";
    }

    if(empty($errors)){
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "Insert into users (fname, email, password) values ('$fname', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            // echo "New record created successfully";
            header("Location: ../login.php?success=1");
            exit();
        } else {
            $errors["signup"] = "Error creating user";
        }
    }

    $_SESSION['errors'] = $errors;
    header("Location: ../registration.php");
    exit();


    // if($password == $confirm_password){
    //     
    // }  else {
    //     echo "Passwords do not match!";
    // } 
}