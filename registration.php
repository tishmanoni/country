<?php
include 'main.php';
// If the user is logged-in redirect them to the home page
if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
// Also check if the user is remembered, if so redirect them to the home page
if (isset($_COOKIE['rememberme']) && !empty($_COOKIE['rememberme'])) {
	// If the remember me cookie matches one in the database then we can update the session variables.
	$stmt = $con->prepare('SELECT id, username, role FROM accounts WHERE rememberme = ?');
	$stmt->bind_param('s', $_COOKIE['rememberme']);
	$stmt->execute();
	$stmt->store_result();
  if ($stmt->num_rows > 0) {
  		// Found a match
  		$stmt->bind_result($id, $username, $role);
  		$stmt->fetch();
  		$stmt->close();
  		session_regenerate_id();
  		$_SESSION['loggedin'] = TRUE;
  		$_SESSION['name'] = $username;
  		$_SESSION['id'] = $id;
  		$_SESSION['role'] = $role;
  		header('Location: index.php');
  		exit;
  	}
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- footer css -->
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap');

    body{
    font-family: 'Rajdhani', sans-serif;
    }
    </style>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60a78142185beb22b30f675a/1f6751rl8';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</head>
	<body>
    
    
      <?php include('templates/header.php'); ?>

<div class="log">


<div class="container">


<div class="row justify-content-center" style="margin-top:140px; margin-bottom:60px;">
     <div class="col-md-6">
       <div class="card bg-light shadow-lg">
         <div class="card-body">


             <h1>Log-in</h1>
             <p>Please, use the following form to log-in. If you don't have an account <a href="registers.php">register here</a></p>
             <hr>

             <form action="authenticate.php" method="post">

              <div class="form-group">
               <label for="username">
                 Username
               </label>
               <input type="text" name="username" class="form-control" placeholder="Username" id="username" required>
             </div>

             	<div class="form-group">
               <label for="password">
                 Password
               </label>
               <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
               </div>

               <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="rememberme"> Remember me
                </label>
              </div>

                <a href="forgotpassword.php">Forgot Password?</a>
               <div class="msg"></div>
               <input type="submit" class="btn btn-primary" value="Login">
             </form>




          </div>
          </div>
        </div>
      </div>


    </div>
    </div>



		<!-- <div class="login">
			<h1>Login</h1>
			<div class="links">

				<a href="registration.php" class="actived">Login</a>
				<a href="registers.php">Register</a>
			</div>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label id="rememberme">
					<input type="checkbox" name="rememberme">Remember me
				</label>
        <a href="forgotpassword.php">Forgot Password?</a>
				<div class="msg"></div>
				<input type="submit" value="Login">
			</form>
		</div> -->


      <?php include('templates/footer.php'); ?>


		<script>
        document.querySelector(".log form").onsubmit = function(event) {
			event.preventDefault();
			var form_data = new FormData(document.querySelector(".log form"));
			var xhr = new XMLHttpRequest();
			xhr.open("POST", document.querySelector(".log form").action, true);
			xhr.onload = function () {
				if (this.responseText.toLowerCase().indexOf("success") !== -1) {
					window.location.href = "dashboard";
				} else {
					document.querySelector(".msg").innerHTML = this.responseText;
				}
			};
			xhr.send(form_data);
		};
		</script>

    
	</body>
</html>
