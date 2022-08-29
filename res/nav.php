<!--Top Navigation Bar-->
    <nav class="navbar navbar-expand-md  navbar-dark navbar-inverse">
    <!-- <nav class="navbar navbar-expand-md" id="navbar" style="background-color: #555"> -->
      <div class="container-fluid">
          <!--Logo on the left-->
          <div class="navbar-header">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavBar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <a href="index.php" class="navbar-brand">Jacob Enerio</a>
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
                	<li class="nav-item" id="nav-chat"><a class="nav-link" href="chat.php" id="chat-link" style="display:none">Chat</a></li>
                	<li class="nav-item" id="nav-login-user"><a class="nav-link" href="profile.php" id="user-link"></a></li>
                    <!-- <li class="nav-item" id="nav-login-toggle"><a class="nav-link" href="#" id="login-link">Login</a></li> -->
                    
                </ul>

            </div>
        </div>
    </nav>
<!-- Script for login button -->
<!-- <script>
function getCookie(cname) {
	  var name = cname + "=";
	  var decodedCookie = decodeURIComponent(document.cookie);
	  var ca = decodedCookie.split(';');
	  for(var i = 0; i <ca.length; i++) {
	    var c = ca[i];
	    while (c.charAt(0) == ' ') {
	      c = c.substring(1);
	    }
	    if (c.indexOf(name) == 0) {
	      return c.substring(name.length, c.length);
	    }
	  }
	  return "";
	}
	
	var loginTop;
    jQuery.fn.shakeLogin = function() {
        this.each(function(i) {
            loginTop = (loginTop==undefined)?$(this).position().top:loginTop;
            var t = loginTop;
            //var t = 299.5;
            for (var x = 1; x <= 3; x++) {
                $(this).animate({
                    top: t + 43
                }, 10).animate({
                    top: t + 23
                }, 50).animate({
                    top: t + 23
                }, 10).animate({
                    top: t + 13
                }, 50).animate({
					top: t
                }, {duration: 50, done: function() {
						openLogin = true;
						//alert("animation done");
            	}
                })
        };
        return this;
    })
    }

	var loginBtn = document.getElementById("nav-login-toggle");
	var loginForm = document.getElementById("login-form");
	var openLogin = true;
	$(document).ready(function() {
		var loginstats = getCookie("loggedin");
		console.log(loginstats);
		if (loginstats == "true") {
			$("#user-link").text(getCookie("username"));
			$("#chat-link").css("display","");
			$("#login-link").text("Logout");
		}
	});
	loginBtn.addEventListener("click", function(){
			if ($("#login-link").text() == "Logout") {
				var ajaxurl = 'res/logout_code.php';
	            console.log("Logging Out");
	            data =  {do_logout: "do_logout"};
	            // Perform Login to Server
	            $.ajax({type:'post',url:ajaxurl, data, success:function (response) {
				
	            	}
				});
	            $("#login-link").text("Login");
                $("#user-link").text("");
                $("#chat-link").css("display","none");
                document.cookie = "loggedin = "+false;
                <?php $_SESSION['loggedin']= 0;?>

                //If we are in the profile page, send us to main page
                var path = window.location.pathname;
				var page = path.split("/").pop();
				var origpath = path.substring(0,path.length-page.length);
				
				console.log("Logging out on "+page);
				if (page == "profile.php" || page=="chat.php") {
					window.location.href = origpath + "index.php";
				}
				
				return;
			}
		  	if (loginForm.style.display == "none") {
				loginForm.style.display = "";
				//Hide all elements
				document.body.childNodes.forEach(function(element) {
					if (element.id == "pg-content") {
						element.style.display = "none";
					}
			  	});
		  	}
		  	else {
			  	if (openLogin) {
			  		$("#login-form").shakeLogin();
			  		openLogin = false;
			  	}
			  	
		  	}
		});
</script> -->