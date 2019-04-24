<?php
$current = 'Gallery';
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
                <div class="gallery">
			<h2>Gallery</h2>
                </div>
		 <div class="content">
                        <div class="content-left">
                                <img src="Orion.jpg" class="artwork">
                                <h3> "Orion: 2019, Oil on Canvas" </h3>

                                <img src="RiverofLife.JPG" class="artwork">
                                <h3> "River of Life: 2016, Digital Drawing" </h3>

                                <img src="HeartNebula.jpeg" class="artwork">
                                <h3> "Heart Nebula: 2019, Oil on Canvas 42" x 80""</h3>

                                <img src ="SarahLinden.JPG" class="artwork">
                                <h3> "Sarah Linden: 2013, Acrylic"</h3>

                        </div>
                        <div class="content-right">
                                <img src="Perseus.jpg" class="artwork">
                                <h3> "Perseus: 2017, Oil on Canvas" </h3>

                                <img src="Nebula.JPG" class="artwork">
                                <h3> "Nebula: 2019, Acrylic on 8(1/2)" x 11""</h3>

                                <img src="LightInTheDarkness.jpg" class="artwork">
                                <h3> "Light in the Darkness: 2018, Charcoal on 42" x 80""</h3>

                                <img src="SarahLinden2.jpg" class="artwork">
                                <h3> "Sarah Linden: 2016, Oil on Canvas"</h3>
                        </div>
                </div>

        </body>
</html>
