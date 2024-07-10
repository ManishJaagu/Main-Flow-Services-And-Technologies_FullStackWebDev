<?php 
include 'connect.php';

if(isset($_POST['signUp'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);

    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
        if($conn->query($insertQuery) === TRUE){
            header("location: index.php");
        }
        else{
            echo "Error: ".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        echo "<script>alert('Login Successful!'); window.location.href='homepage.php';</script>";
    }
    else{
        echo "<script>alert('Login Failed! Incorrect Email or Password'); window.location.href='index.php';</script>";
    }
}
?>
