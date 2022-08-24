<?php 
//Handles login stuff
if(!isset($_SESSION))
{
    session_start();
} 
//Print_r ($_SESSION);
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo $_SESSION['username'];
    //echo isset($_SESSION['loggedin']);
    //echo "<script>var loginstats=\"loggedin: "+$_SESSION['username']+"\";</script>";
    //echo "var loginstats = \""\";
    //echo "<script>$(\"#user-link\").text(username);</script>";
    //echo "<script>$(\"#login-link\").text(\"Logout\");</script>";
}
else {
    //echo isset($_SESSION['loggedin']) ? $_SESSION['loggedin']: "Not logged in!";
    //echo "We are not logged in!";
    //echo isset($_SESSION['loggedin']);
    //echo "<script>var loginstats=\"loggedout\"</script>";
}
?>
<!--
	Jacob's Test Website's Header
	Using Bootstrap
  
-->

<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


 <?php
    // Get the base path of the server
    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);     
    // Determine the depth of the current folder
    $folder_depth = substr_count($path, "/");
    $folder_depth -= 2;
    $backup = "";
    for ($i = 0; $i < $folder_depth; $i++) {
        $backup .= "../";
    }
    $res = $backup . "res/";
    $css = "css/custom.css";
    $css_path = $backup . $css;
    
?>

<link rel="stylesheet" href=<?php echo $css_path?> type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<!DOCTYPE html>
<html>


<head>
    <title>Jacob Enerio</title>

</head>