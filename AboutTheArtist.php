<?php
$current = 'Artist';
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
			
			<div class="topPage">
				<h2>About the Artist</h2>
				<img src="Melissa.jpg" class="artist">
                                <h2>Melissa Maxey</h2>
                                <h3>Melissa Maxey is an Idaho native and will graduate from <br>
                                        Boise State University with a Bachelors of Fine Arts <br>
                                        Degree in Illustration. Her artwork spans mediums from <br>
                                        photography, drawing, painting, digital drawings, and <br>
                                        printmaking. Her passion is in curatorial work as she is <br>
                                        working at the Boise State University SUB Fine Art Galleries. <br>
                                        She enjoys helping artists prepare for their exhibitions as <br>
                                        well as putting together her own. She currently lives in <br>
                                        Meridian, Idaho with her daughter, two sons, and her dachshund Gus. <br><br><br></h3>
			</div>
        </body> 
</html>
