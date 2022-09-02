<!--Top Navigation Bar-->
    <nav class="navbar navbar-expand-md  navbar-dark navbar-inverse">
    <!-- <nav class="navbar navbar-expand-md" id="navbar" style="background-color: #555"> -->
      <div class="container-fluid">
          <!--Logo on the left-->
          <div class="navbar-header">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavBar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <a href=<?php echo $backup ."index.php"?> class="navbar-brand">Jacob Enerio</a>
          </div>

            <!--Menu Bar-->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="navbar-nav">
                    <li class="nav-item" id="nav-bar-home"><a class="nav-link" href=<?php echo $backup ."index.php"?>>About</a></li>
                    <!-- <li class="nav-item" id="nav-bar-technical"><a class="nav-link" href=<?//php echo $backup ."technical.php"?>>Technical Portfolio</a></li> -->
					<li class="nav-item dropdown" id = "nav-bar-technical">
							<a class = "nav-link" href=<?php echo $backup ."technical.php"?>> Technical Portfolio 
							<i class="fa fa-caret-down" style="color: white;"></i></a>

                        <ul class="dropdown-menu">
							<li><a href = <?php echo $backup . "technical.php"?>>Portfolio</li>
							<li><a href = <?php echo $backup . "chat-simulator/chat-app/index.php"?>>Chat App</li>
                            <li><a href = "https://career-walrus.herokuapp.com/">Career Walrus</a></li>
                            <li><a href = "https://github.com/Jwdegames/GoodwinModel">Goodwin Model Simulator</a></li>
                            <li><a href = "https://github.com/Jwdegames/CacheSimulator">Cache Simulator</a></li>
							<li><a href = <?php echo $backup . "technical/OfTheValiant/of_the_valiant.php"?>>Of The Valiant</a></li>
							<li><a href = <?php echo $backup . "technical/edge_glider.php"?>>Edge Glider</a></li>
							<li><a href = <?php echo $backup . "technical/bfs_helper.php"?>>BFS Helper</a></li>
							<li><a href = <?php echo $backup . "technical/PolygonPuzzles/polygon_puzzles.php"?>>Polygon Puzzles</a></li>
                        </ul>
					</li>
                    <li class="nav-item" id="nav-bar-resume"><a class="nav-link" href=<?php echo $backup ."resume.php"?>>Resume</a></li>
					<li class="nav-item dropdown" id = "nav-bar-resume">
							<a class = "nav-link" href="#"> Contact 
							<i class="fa fa-caret-down" style="color: white;"></i></a>

                        <ul class="dropdown-menu">
							<li><a href = "https://github.com/Jwdegames">GitHub</li>
                            <li><a href = "https://www.linkedin.com/in/jacobwde/">LinkedIn</a></li>
                            <li><a href = "mailto: jacobwde12@gmail.com">Email</a></li>
                        </ul>
					</li>
					<!-- <li class="nav-item" id="nav-bar-hobbies"><a class="nav-link" href="hobbies.php">Hobbies</a></li> -->
                    <!--dropdown menu
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                            <li><a href="#">Link 6</a></li>
                        </ul>
                    </li>-->
                </ul>

                <!--Right aligned stuff-->
                <ul class="nav navbar-nav ml-auto">
					<?php include $backup . "chat-simulator/chat-app/login_nav.php" ?>
                </ul>

            </div>
        </div>
    </nav>
<!-- Script for login form -->
<?php include $backup . "chat-simulator/chat-app/login_form.php" ?>
<?php include $backup . "chat-simulator/chat-app/login_form_features.php" ?>