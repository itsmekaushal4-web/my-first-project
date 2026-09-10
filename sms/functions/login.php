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
    }else{
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $errors["email"] = "Email already exists!";
        }
    }


    if(empty($password)){
        $errors["password"] = "Password is required!";
    }elseif(strlen($password) < 8){
        $errors["password"] = "Password must be at least 8 characters!";
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
}