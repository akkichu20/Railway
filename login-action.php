<?php
session_start();

$phone = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'admin', 'site');

if(isset($_POST['log_user']))
  {

    $phone = mysqli_escape_string($db,$_POST['phone']);
    $password = mysqli_escape_string($db,$_POST['password']);

    if(empty($phone) || empty($password))
      array_push($errors,"Both the fields are required");
    if(count($errors) == 0)
    {
       $password = md5($password);
       $query = "SELECT * FROM registered_users WHERE phno = '$phone' AND password = '$password'";
       $results=mysqli_query($db,$query);
       if(mysqli_num_rows($result) == 1)
       {
        $_SESSION['phone'] = $phone;
        $_SESSION['success'] = "You are now logged in!!";
        header("location: #index");
       }
       else
        array_push($errors, "Incorrect credentials!!!");

    }

  }
?>