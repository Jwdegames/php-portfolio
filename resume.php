<?php 
    include "res/head.php";  
?>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js">
</script>

<!-- Navigation Bar -->
<?php
	include 'res/nav.php';
?>

<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
	document.getElementById('nav-bar-resume').setAttribute('class', 'active nav-item');
	</script>

	<div id = "content-background">
		<div id = "content">
			<h2><u><b>Resume</b></u></h2>
            <div id="my_pdf_viewer" class = "center">
                <div id="pdf_controls">  
                    <div class = "btn btn-primary" id = "zoom_in">+</div>
                    <div class = "btn btn-primary" id = "zoom_out">-</div>
                    <a class = "btn btn-primary" id = "download_resume" href = "./resume/Jacob Enerio Resume.pdf" download = "Jacob Enerio Resume.pdf" >Download Resume</a>
                 </div>

                <div id="canvas_container">
                    <canvas id="pdf_renderer"></canvas>
                </div>

            </div>

            <script>
                var myState = {
                    pdf: null,
                    currentPage: 1,
                    zoom: 1
                }
            
                pdfjsLib.getDocument('./resume/Jacob Enerio Resume.pdf').then((pdf) => {
            
                    myState.pdf = pdf;
                    render();
        
                });
        
                function render() {
                    myState.pdf.getPage(myState.currentPage).then((page) => {
                
                        var canvas = document.getElementById("pdf_renderer");
                        var ctx = canvas.getContext('2d');
            
                        var viewport = page.getViewport(myState.zoom);
        
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
                
                        page.render({
                            canvasContext: ctx,
                            viewport: viewport
                        });
                    });
                }

                document.getElementById('zoom_in').addEventListener('click', (e) => {
                    if(myState.pdf == null) return;
                    myState.zoom += 0.5;
                    render();
                });
        
                document.getElementById('zoom_out').addEventListener('click', (e) => {
                    if(myState.pdf == null) return;
                    myState.zoom -= 0.5;
                    render();
                });

        </script>
		</div>
    </div>
</body>
</html>
