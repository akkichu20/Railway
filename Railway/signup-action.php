<?php 
  session_start();

  $phone = "";
  $name  = "";
  $errors = array();

  $db=mysqli_connect('localhost','root','admin','site') or die("Sorry unable to connect to database");

  if(isset($_POST['reg_user']))
  {

    $name = mysqli_escape_string($db,$_POST["name"]);
    $phone = mysqli_escape_string($db,$_POST["phone"]);
    $license = mysqli_escape_string($db,$_POST["license"]);
    $password = mysqli_escape_string($db,$_POST["password"]);

  if(empty($name))
    array_push($error,"Name is required");
  if(empty($phone))
    array_push($error,"Phone number is required");
  if(empty($password))
    array_push($error,"Password is required");

  $check_query = "SELECT * FROM registered_users WHERE phno = '$phone' LIMIT 1";

  $result = mysqli_query($db,$check_query);
  $user = mysqli_fetch_assoc($result);

  if($user)
  {

    if($user["phno"] === $phno )
      array_push($errors,"Phone number already registered" );
  }

  if(count($errors) == 0)
  {

     $password=md5($password);
     $query = "INSERT INTO registered_users (id,phno,display_name,password,lno) VALUES ('$phone','$name','$password','$license')" ;
     mysqli_query($db,$query);
     $_SESSION['phone'] = $phone
     $_SESSION['success'] = "You have succesfully logged in!!!";

     header(location: #);

  }
}
