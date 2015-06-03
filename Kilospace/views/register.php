<body>
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/scripts.js"></script>
    <div class="container">
    <center>
    <?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo "<div class='col-lg-4 col-lg-offset-4'><span class='alert alert-danger'>".$error."</div></span>";
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo "<div class='col-lg-4 col-lg-offset-4'><span class='alert alert-warning'>".$message."</div></span>";
        }
    }
}
?>    
</center>
    <div id="fadein">
<!-- register form -->
<form method="post" action="register.php" name="registerform" class="form-signin">
<h2 class="form-signin-heading">Register</h2>
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username" class="sr-only">Username (only letters and numbers, 5 to 64 characters)</label>
    <input id="login_input_username"  class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="Username"/>

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email" class="sr-only">User's email</label>
    <input id="login_input_email" class="form-control" type="email" name="user_email" required placeholder="Email" />

    <label for="login_input_password_new" class="sr-only">Password (min. 6 characters)</label>
    <input id="login_input_password_new" class="form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="Password" />

    <label for="login_input_password_repeat" class="sr-only">Repeat password</label>
    <input id="login_input_password_repeat" class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="Password" />
    <input type="submit"  name="register" value="Register" class="btn btn-lg btn-primary pull-left"/>
	<a class="btn btn-lg btn-info pull-right" href="home.php">Login</a>
</form>
</div>
