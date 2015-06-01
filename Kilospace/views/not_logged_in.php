<body>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/scripts.js"></script>
    <div class="container">
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<div id="fadein">
<!-- login form box -->
      <form class="form-signin" method="post" action="home.php" name="loginform">
        <h2 class="form-signin-heading">Sign In</h2>
        <label for="login_input_username" class="sr-only">Username</label>
        <input type="text" id="login_input_username"  class="form-control" type="text" name="user_name" placeholder="Username" required autofocus />
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" type="password" name="user_password" placeholder="Password" autocomplete="off" required />
        
        <input class="btn btn-lg btn-primary pull-left" type="submit"  name="login" value="Log In" />
        <a class="btn btn-lg btn-info pull-right" href="register.php">Register</a>
      </form>
		</div>
    </div> <!-- /container -->



  </body>
</html>