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


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        <title>OTORail Dashboard</title>
    </head>
    <body>
        <header>
            <nav class="main-nav">
                <div class="row">
                    <?php  if (isset($_SESSION['username'])) : ?>
                    <h2>Welcome,<?php echo $_SESSION["name"]; ?> </h2>
                    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>
                </div>
            </nav>
        </header>
    
    </body>
</html>