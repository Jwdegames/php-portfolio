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
<!doctype html>
    <html lang = "en">
        <head>
            <meta charset="utf-8">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

            <title>Jacob Enerio</title>

        </head>