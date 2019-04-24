<?php
$current = 'Login';
session_start();

        if(isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]){
                header("Location:index.php");
        }

        $username = "";
        if(isset($_SESSION["username_present"])){
                $username = $_SESSION["username_present"];
        }
?>

<html>
        <head>
                <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="CreateAnAccount.css">
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
                </div>
	<form action="login_handler.php" method="POST">
                <div class="create_account">
			<h2>Login</h2>
                        <?php
                                if(isset($_SESSION["status"])){
                                        echo"<div class = 'status'>";
                                        echo $_SESSION["status"];
                                        echo "</div>";
                                        unset($_SESSION["status"]);
                                        
                                }
                        ?>
			<hr>

			<label for="username"><b>Username</b></label>
                        <input value ="<?php echo $_SESSION["username_preset"];?>"
                        type="text" placeholder="Enter Username" name="username" id="username" 
                        value="<?php echo $username; ?>"/>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" id="password"
                        value=""/>

			

			<div class="clearfix">
				<button type="Submit" class="signupbuttn">Login</button>
			</div>

		</div>
	</form>

        </body>
</html>
