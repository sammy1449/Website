<?php
session_start();

if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}
?>
		
<link rel="stylesheet" href="styles.css">
		<div class="topmenu">
			<div class="banner">
				<h1>Ms. Maxey's Art Work</h1>
			</div>
        <div class="infobar">
            <div class="main-container">
                <div id="navigation">
                <ul>
                <li <?php if($thisPage=="Home") 
                    echo " id=\"currentpage\""; ?>>
                <a href="index.php">Home</a></li>
                <li <?php if($thisPage=="About the Artist") 
                echo " id=\"currentpage\""; ?>>
                <a href="AboutTheArtist.php">About the Artist</a></li>
                <li <?php if($thisPage=="Gallery") 
                echo " id=\"currentpage\""; ?>>
                <a href="gallery.php">Gallery</a></li>
                <li <?php if($thisPage=="Sign In") 
                echo " id=\"currentpage\""; ?>>
                <a href="login.php">Sign In</a></li>
                <li <?php if($thisPage=="Logout") 
                echo " id=\"currentpage\""; ?>>
                <a href="logout.php">Logout</a></li>
                </ul>
                </div>
            </div>
        </div>



    
