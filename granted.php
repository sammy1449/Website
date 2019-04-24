<?php
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

        <div class = "access_granted">
        <h2>Welcome, <?php echo $_SESSION[$user];?>!</h2>
        </div>
        <div class = "viewers_disgression">
            <p><b>Please Read Before Continuing</b></p>
            <p>This website contains original artwork from Ms. Maxey's<br>
                work. Please do not copy this artwork or post it <br>
                anywhere else without the approval of the artist.<br>
                Thank you for your time! Below is a cute picture <br>
                of Gus, the artist's dachshund. <br></p>
            
            <p><img src="Gus.JPG" class="artist">
    </body>
</html>