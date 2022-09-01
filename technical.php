<?php 
    include "res/head.php";  
?>

<!-- Navigation Bar -->
<?php
	include 'res/nav.php';
?>

<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
	document.getElementById('nav-bar-technical').setAttribute('class', 'active nav-item dropdown');
	</script>

	<div id = "content-background">
		<div id = "content">
            <?php
                // Generate a Bubble that contains the info about a project.
                function createTPBubble($name, $start_date, $end_date, $img_path, $img_width, $img_height, $description, $link, $tags) {

                    echo <<<EOT
                    <div class = "tp-bubble">
                        <table class = "center-h tbp-table">
                            <tr class = "tbp-row">
                                <td class = "td-spaced tbp-left">
                                    <h4><a href = $link>$name<a></h4>
                                </td>
                                <td rowspan = "3" class = "td-spaced center">
                                    <img src = "$img_path" width = "$img_width" height = "$img_height"/>
                                </td>
                            </tr>
                            <tr class = "tbp-row">
                                <td class = "td-spaced tbp-left">
                                    <h5>$start_date - $end_date</h5>
                                </td>
                            </tr>
                            <tr class = "tbp-row">
                                <td class = "td-spaced tbp-left center">
                    EOT;
                    foreach ($tags as $tag) {
                        echo <<<EOT
                                    <div class = "tpb-tag">$tag</div>
                        EOT;
                    }
                    echo <<< EOT
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2" class = "tbp-desc">
                                    <p>$description</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    EOT;
                }
            ?>
			<h2><u><b>Technical Portfolio</b></u></h2>

            <?php
                $description = 
                    "Career Walrus is an online resource for consolidating career information for engineering students. It was designed
                    in React TypeScript and is hosted on Heroku. I worked on this project with 3 other people. We used an Agile methodology, and I helped to
                    maintain the product and sprint backlogs and burndown charts. Additionally, I contributed the cost of living information
                    from a BLS API and also a magnifying glass accessibility feature.";
                $tags = ["React", "TypeScript", "Uses APIs", "Heroku", "Agile", "Career Info"];
                createTPBubble("Career Walrus", "Apr 2022", "May 2022", "tech-imgs/CareerWalrus.png", "600px", "400px",
                    $description, "https://career-walrus.herokuapp.com/", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "The Goodwin Model simulator simulates the relationship between wage share and employment. It does this by displaying 
                    graphs in Python that implement higher level math concepts such as Lambert functions, McLaurin series, and differential equations.
                    Additionally, there are a couple of guides included that explain the economic concepts, as well as the derivations of the features
                    shown in the graphs. This can either be run with a console or the .exe in the GitHub releases page can be excuted.";
                $tags = ["Python", "Economics", "Simulator", "Visualizer", "Calculus"];
                createTPBubble("Goodwin Model Simulator", "Apr 2022", "Apr 2022", "tech-imgs/GoodwinModelSimulator.png", "600px", "400px",
                    $description, "https://github.com/Jwdegames/GoodwinModel", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "The Cache Simulator simulates how different cache properties affect a cache. 
                    This program is ran by executing Python through a command line. 
                    The user can set the cache's size, data block size, associativity, replacement policy, write hit policy, and write miss policy. 
                    The user can read to, write to, flush, and view the cache. The GitHub also has Doxygen Documentation of the cache simulator.";
                $tags = ["Python", "Cache", "Command Line", "Simulation"];
                createTPBubble("Cache Simulator", "Dec 2021", "Dec 2021", "tech-imgs/CacheSimulator.png", "600px", "400px",
                    $description, "https://github.com/Jwdegames/CacheSimulator", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "Of The Valiant is a prototype Turn Based Strategy (TBS) game. This was
                    developed utilizing C# in Unity.The main goal of the game is to defeat the enemy
                    army while making sure your army survives. This game was inspired by a Flash game
                    I used to play called Battalion Nemesis. One of the fun parts of developing this
                    game was making a Utility AI for the enemy army. Here, each possible task the enemy
                    army can do is evaluated and ranked. The enemy army then takes the best ranked
                    actions and executes them. Another fun part I had was developing the art for the
                    game. All the UI and the gameplay graphics (excluding the firing and explosion gifs)
                    were made by me. Currently, I am attempting to develop a level editor for the game.";
                $tags = ["C#", "Unity", "AI", "Strategy Game"];
                createTPBubble("Of The Valiant", "May 2020", "Mar 2021", "tech-imgs/OfTheValiant.png", "600px", "400px",
                    $description, "technical/OfTheValiant/of_the_valiant.php", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "Edge Glider is a simple maze traversal game made in Java. You play as a blue square
                    that must reach the exit, designated as green squares. However, there are moving enemies and
                    obstacles that will try to stop you. There are four levels, with each level
                    increasing in difficulty. The Game Utilizes a simple pathfinding algorithm along with threading to
                    make the game work. This uses a custom GUI Package I created called JWDEGUI.";
                $tags = ["Java", "Threading", "AI", "Maze Game"];
                createTPBubble("Edge Glider", "Mar 2020", "Feb 2022", "tech-imgs/EdgeGlider.png", "600px", "400px",
                    $description, "technical/edge_glider.php", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "BFS Helper, otherwise known as Breadth First Search Helper, is a program made in
                    Java that helps people visualize a Breadth First Search of a Binary Tree. The
                    user can add, change, and delete nodes to the binary tree. They can also set a
                    designated node that should be found in the tree. This is first where I created
                    the JWDEGUI package.";
                $tags = ["Java", "Binary Tree", "Visualizer", "Simulation"];
                createTPBubble("BFS Helper", "Jan 2018", "Jan 2019 ", "tech-imgs/BFSHelper.png", "600px", "400px",
                    $description, "technical/bfs_helper.php", $tags);
            ?>
            <p></p>
            <?php
                $description = 
                    "Polygon Puzzles is a simple board game made with C# in Unity. It features 20 levels, where in
                    each level you try to make the whole board green. Later levels feature enemy factions that try
                    to turn the board into their own color. This is my first major coding project.";
                $tags = ["C#", "Unity", "Board Game", "Polygons"];
                createTPBubble("Polygon Puzzles", "Oct 2015", "Apr 2016 ", "tech-imgs/PolygonPuzzles.png", "600px", "400px",
                    $description, "technical/PolygonPuzzles/polygon_puzzles.php", $tags);
            ?>
		</div>
    </div>
</body>
</html>
