<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KiloSpace</title>
<link href="../assets/css/stylesheet.css" rel="stylesheet">
<link href="../assets/css/game.css" rel="stylesheet">
<link rel="shortcut icon" href="../favicon.png" type="image/x-icon" />
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/scripts.js"></script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/"><img src="assets/img/logo.png" alt="Kilospace Logo" width="136" height="34"/></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($page=='home'){ echo 'class="active"';}?>><a href="/">Home</a></li>
            <li <?php if($page=='play'){ echo 'class="active"';}?>><a href="index.php?page=play">Play</a></li>
            <li <?php if($page=='story'){ echo 'class="active"';}?>><a href="index.php?page=story">Story</a></li>
            <!--<li <?php //if($page=='starting'){ echo 'class="active"';}?>><a href="index.php?page=starting">Getting Started</a></li>
            <li <?php if($page=='help'){ echo 'class="active"';}?>><a href="index.php?page=help">Help</a></li>-->
            <li <?php if($page=='forum'){ echo 'class="active"';}?>><a href="index.php?page=forum">Forum</a></li>
            <li <?php if($page=='press'){ echo 'class="active"';}?>><a href="index.php?page=press">Press</a></li>
            <li <?php if($page=='contact'){ echo 'class="active"';}?>><a href="index.php?page=contact">Contact</a></li>
            <li class="dropdown<?php if($page=='faq' or $page=='forums'){ echo ' active';}?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              	<li><a href="index.php?page=faq">F.A.Q.</a></li>
                <li><a href="index.php?page=forums">Forum</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Helpdesk</li>
                <li><a href="#">Submit New Ticket</a></li>
                <li><a href="#">Check Ticket</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>