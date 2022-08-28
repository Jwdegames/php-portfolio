<?php 
    include "../../res/head.php";  
?>
<!DOCTYPE html>
<html>

<head>

<script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Polygon Puzzles</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/PolygonPuzzles5Web.json", {onProgress: UnityProgress});
    </script>
</head>


<!-- Navigation Bar -->
<?php
include $res . "/nav.php";
?>

	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	  <script type="text/javascript">
		document.getElementById('nav-bar-technical').setAttribute('class', 'active nav-item dropdown');
	 </script>

<body>
  <div id="content">
    <h2><u><b>Polygon Puzzles</b></u></h2>

    <p class = "center">Here is a game I made in Unity! To play, use the arrow keys to spread the green across the board. Once all shapes are green, you win!
    <a href = "https://github.com/Jwdegames/Polygon-Puzzles">GitHub</a>
    </p>


        <div class="webgl-content">
          <div id="gameContainer" style="width: 960px; height: 600px; align:bottom;"></div>
          <div class="footer">
            <div class="webgl-logo"></div>
            <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
            <div class="title">Polygon Puzzles</div>
          </div>
        </div>
    </div>
</body>
	
</script>
		
</html>
