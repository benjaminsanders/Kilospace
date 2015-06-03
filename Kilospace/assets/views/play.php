<div class="container">
    <center>
    <?php
	$ip = $_SERVER["REMOTE_ADDR"];
	if($ip == "75.71.223.81"){
		echo '<iframe src="https://kilo.space/home.php" width="900" height="500" frameBorder="0" scrolling="no"></iframe>';
	}else{
		echo '<iframe src="https://kilo.space/soon.php" width="900" height="500" frameBorder="0" scrolling="no"></iframe>';
	}
	?>
    
    </center>
</div>