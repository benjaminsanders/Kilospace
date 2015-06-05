<style type="text/css">
iframe{border: 7px solid #1B1B1B}
</style>
<div class="container">
    <center>
    <?php
	$ip = substr($_SERVER["REMOTE_ADDR"],0,9);
	if($ip == "75.71.223"){
		echo '<iframe src="https://kilo.space/home.php?seed='.date('YmdHis').'" width="880" height="500" frameBorder="1" scrolling="no"></iframe>';
	}else{
		echo '<iframe src="https://kilo.space/soon.php" width="880" height="500" frameBorder="0" scrolling="no"></iframe>';
	}
	?>
    
    </center>
</div>