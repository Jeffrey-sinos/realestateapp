<!DOCTYPE html>
<html lang = "en">
<head>
  <title>Registration Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /*.jumbotron {
    background-color: #2F4F4F;
    color: #fff;
  }*/
  .border-class
  {
  	border-top: thin solid #C0C0C0;
  	
  }
  .newAcc, .reg
  {
  	font-family: candara;
  	font-weight: bold;
  }
  .container
  {
  	padding-top: 80px;
  	padding-right: 180px;
  	padding-left: 180px;
  }
  </style>
</head>

<body>

<!--  <div class="jumbotron">
 	<h3 class="reg text-center">HomePros Realty</h2>
 </div> -->
 <div class="container">
 	<h3 class="newAcc text-center">Create New Account</h2>
   <form class="border-class" action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
    </div>
    <div class="mt-3" >
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Create password" name="pswd">
    </div>
    <div class="mt-3 mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-secondary w-100 mb-3" >Submit</button>

    <p>Already have an account? <a href="">Sign In</a></p>
  </form>
  </div>

</body>
</html>