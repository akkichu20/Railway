<?php
session_start();

if(!isset($_SESSION['phone']))
{
  $_SESSION['msg'] = "You must log in!";
  header("location : login.html");
}

if(isset($_GET)["logout"])
  {
    session_destroy();
    unset($_SESSION['phone']);
    header ("location : login.html");
  }
?>