<?php
$current = 'Home';
session_start();

if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}
?>

<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="styles.css">
		<title>MsMaxeyArtWork</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<script src ="jquery-3.4.0.min.js"></script>
		<script src ="myJS.js"></script>
	</head>
	<body>
		<div class="topmenu">
			<div class="banner">
				<h1>Ms. Maxey's Art Work</h1>
			</div>
			<div class="infobar">
				<a href="index.php"><button type="button" <?php if($current == 'Home') {echo 'class="current"';} ?>>Home</button></a>
				<a href="AboutTheArtist.php"><button type="button" <?php if($current == 'Artist') {echo 'class="current"';} ?>>About the Artist</button></a>
				<a href="gallery.php"><button type="button" <?php if($current == 'Gallery'){echo 'class="current"';} ?>>Gallery</button></a>
				<a href="login.php"><button type="button" <?php if($current == 'Login') {echo 'class="current"';} ?>>Login</button></a>
				<a href="logout.php"><button type="button" <?php if($current == 'Logout'){echo 'class="current"';} ?>>Logout</button></a>
			</div>
		</div>
		<div class="content-middle">
			<h2> Welcome to the Home Page! </h2><br>
			<p>Below are some of the artist's favorite pieces.</p>
		</div>
		<div class="button-container">
			<button class="black">Nebula</button>
			<button class="red">Light in the Darkness</button>
			<button class="purple">Heart Nebula</button>
			<button class="pink">Orion</button>
			<br>
		</div>
		<div class="index_image">
			<img id="change-image" src=""/>
		</div>
	</body>
</html>
