<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Paron: The New Way To Present</title>
  <link rel="stylesheet" type="text/css" href="css/StyleSheet.css">

</head>

<body>

    <div class="container">



        <!-- The code below this is for the menu bar-->
        	<?php include("header.php"); ?>
          <?php include("popUpForm.php");?>
        <!-- The code below this is the end of menu bar-->
        <div class="slideshow">
        	<?php include("slideshow.php"); ?>
            <!--<iframe src="slideshow.html" width="100%" height="480px" scrolling="no" frameborder="0"></iframe>-->
        </div>


        <div class="rowBelowSlider R1">
            <div class="rowBelowSlider col1">
                <h1>Make Presentation</h1>
                <img src="stuff/createPres.png" alt="Make Presentation">
                <p>This is its description</p>
            </div>

            <div class="rowBelowSlider col2">
                <h1>Present It!</h1>
                <img src="stuff/presentPres.png" alt="Present Presentation">
                <p>This is its description</p>
            </div>

        </div>

        <div class="rowBelowSlider R2">
            <div class="rowBelowSlider col1">
                <h1>Collaboration</h1>
                <img src="stuff/collaborationPres.png" alt="Collaborative Presentation">
                <p>This is its description</p>
            </div>

            <div class="rowBelowSlider col2">
                <h1>Download</h1>
                <img src="stuff/downloadPres.png" height="26%" alt="Download Presentation">
                <p>This is its description</p>
            </div>

        </div>


        
        <footer>Copyright &copy; Paron.com 2017</footer>

    </div>

</body>

</html>
