<?php

session_start();
require_once 'dao.php';
$dao = new Dao();
echo "poop";

if($dao->isValidUser($_POST["username"], $_POST["password"])){
    echo "in validUser login_handler";
    hash("sha256", "password" . "jdhwnsmjwuKSJKSN2u42iue9034upejowmlad");
    hash("sha256", "username" . "JSIADOIANDakeuwijdnklshdwi19372932984");
    $_SESSION["access_granted"] = true;
    $_SESSION[$user] = $_POST["username"];
    header("Location:granted.php");
}else{
    $status = "Invalid username or password";
    $_SESSION["status"]= $status;
    $_SESSION["username_preset"] = $_POST["username"];
    $_SESSION["access_granted"] = false;
    header("Location:login.php");
}
?>
