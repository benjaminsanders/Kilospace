<div style="position:fixed;top:0;right:0;bottom:0;left:0;">
<div class="col-lg-12 text-center">
  <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
  <h2 class="form-signin-heading">
  KiloSpace Industries</h2><br /><br />
  <!-- The following links will eventually become images instead of css class buttons-->
  <p><a href="home.php" class="btn btn-lg btn-primary">New Game</a></p>
  <p><a href="home.php" class="btn btn-lg btn-success">Continue</a></p>
  <p><a href="home.php" class="btn btn-lg btn-info">Options</a></p>
  <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
  <p><a href="home.php?logout" class="btn btn-lg btn-default">Logout</a></p>
</div>
</div>
<!-- Video Background -->
<div style="position:fixed;top:0;right:0;bottom:0;left:0;overflow:hidden;z-index:-100;">
    <video loop muted autoplay style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <source src="../data/vid/spin.mp4" type="video/mp4">
        <source src="../data/vid/spin.ogv" type="video/ogv">
        <source src="../data/vid/spin.webm" type="video/webm">
    </video>
</div>