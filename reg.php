<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/css" src="style.css"></script>
    <script type="text/javascript" src="loginrider.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
  </head>
  <body>
<div class="container-fluid bg">
	<div class="container">
	    <div class="row">
		<div class="col-md-4 ">

		</div>

		<div class="col-md-4">
		        <div class="card regform wow bounce animated" data-wow-delay="0.05s">
		            <div class="card-body regform">
		               <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 class="sign">Signup</h1>
                           </div>
                        </div>
                        <form action="signup-action.php" method="post" name="registration">
                           <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text"  name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Phone Number</label>
                              <input type="text"  name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">License Number</label>
                              <input type="text" name="license"  class="form-control" id="license" aria-describedby="emailHelp" placeholder="Enter License Number">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" name="reg_user" class=" btn btn-block mybtn btn-primary tx-tfm">Sign Up</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="login.html" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
		            </div>
		        </div>
		    </div>
	</div>
	</div>
</div>

  </body>
</html>
