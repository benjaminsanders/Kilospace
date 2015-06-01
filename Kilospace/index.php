<?php 
if(isset($_GET['page'])){$page=preg_replace('/\PL/u', '', $_GET['page']);}else{$page='home';}
if(isset($_GET['section'])){$section=preg_replace('/\PL/u', '', $_GET['section']);}else{$section='story';}
include('assets/modules/header.php'); 
if($page=='home'){
		include('assets/views/home.php');	
	}elseif($page=='play'){
		include('assets/views/play.php');	
	}elseif($page=='starting'){
		include('assets/views/starting.php');
	}elseif($page=='story'){
		include('assets/views/story.php');
	}elseif($page=='press'){
		include('assets/views/press.php');
	}elseif($page=='forum'){
		include('assets/views/forum.php');
	}elseif($page=='forums'){
		include('assets/views/forum.php');
	}elseif($page=='help'){
		include('assets/views/help.php');
	}elseif($page=='contact'){
		include('assets/views/contact.php');
	}elseif($page=='faq'){
		include('assets/views/faq.php');
	}
include('assets/modules/footer.php');
?>