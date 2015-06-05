<style>.fullscreen-bg{position:fixed;top:0;right:0;bottom:0;left:0;overflow:hidden;z-index:-100;}.fullscreen-bg__video{position:absolute;top:0;left:0;width:100%;height:100%;}</style>
<div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="../data/vid/spin.mp4" type="video/mp4">
        <source src="../data/vid/spin.ogv" type="video/ogv">
        <source src="../data/vid/spin.webm" type="video/webm">
    </video>
</div>
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<font color="#FFFFFF">Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="home.php?logout">Logout</a></font>
