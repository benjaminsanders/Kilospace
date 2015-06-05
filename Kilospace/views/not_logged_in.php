    <link href="../assets/css/stylesheet.css" rel="stylesheet">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/scripts.js"></script>
    <body>
    <style>.fullscreen-bg{position:fixed;top:0;right:0;bottom:0;left:0;overflow:hidden;z-index:-100;}.fullscreen-bg__video{position:absolute;top:0;left:0;width:100%;height:100%;}</style>
<div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="../data/vid/star.mp4" type="video/mp4">
        <source src="../data/vid/star.ogv" type="video/ogv">
        <source src="../data/vid/star.webm" type="video/webm">
    </video>
</div>
    <div class="container">
    <center>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
             echo "<div class='col-lg-4 col-lg-offset-4'><span class='alert alert-danger'>".$error."</div></span>";
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
             echo "<div class='col-lg-4 col-lg-offset-4'><span class='alert alert-warning'>".$message."</div></span>";
        }
    }
}
?>
</center>
<div id="fadein" class="text-center">
      <!-- login form box -->
      <form class="form-signin" method="post" action="home.php" name="loginform">
        <h2 class="form-signin-heading"><img id="rotator" class="rotator" src="../assets/img/ssilogo.png" alt="" width="100" height="100"><br>Sign In</h2>
        <label for="login_input_username" class="sr-only">Username</label>
        <input type="text" id="login_input_username"  class="form-control" type="text" name="user_name" placeholder="Username" required autofocus />
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" type="password" name="user_password" placeholder="Password" autocomplete="off" required />
        
        <input class="btn btn-lg btn-primary pull-left" type="submit"  name="login" value="Log In" />
        <a class="btn btn-lg btn-info pull-right" href="register.php?seed=<?=date('YmdHis');?>">Register</a>
      </form>
		</div>
    </div> <!-- /container -->



  </body>
</html>