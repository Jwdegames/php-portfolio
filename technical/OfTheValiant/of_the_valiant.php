<?php 
    include "../../res/head.php";  
?>
<!DOCTYPE html>
<html>

<head>

<script type='text/javascript' src='https://ssl-webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/jquery.min.js'></script>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Of The Valiant</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Alhpa1.0.0Draft2.json", {onProgress: UnityProgress});
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
    <h2><u><b>Of The Valiant</b></u></h2>

    <p class>Of The Valiant is a prototype game where you control a set of units and must defeat the other side. 
        Everything involves clicking. Move the screen with the WASD keys. Additionally, if you want to play the game locally, 
        extract the ZIP folder and then click on the exe file to play. <a href = 
        "https://drive.google.com/file/d/1m7uEFlw15eYdbMrFAyGicedTUITeUeM4/view?usp=sharing">
        Download.</a> &nbsp; <a href = "https://github.com/Jwdegames/OfTheValiant">GitHub</a></p>


        <div class="webgl-content">
          <div id="gameContainer" class = "valiantGC" style="width: 957; height: 518; align:bottom;"></div>
          <div class="footer">
            <div class="webgl-logo"></div>
            <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
            <div class="title">Of The Valiant</div>
          </div>
        </div>
    </div>
</body>
	
</script>
		
</html>
