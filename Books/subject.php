<?php
// Start the session

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>subject</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    
   
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/linux/pen/QgMoQa?limit=all&page=5&q=box" />

	<link href="css/box_card.css" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


 
      
<div>
  <div class=" text-center">
     
         <h2 ><strong>MALLA REDDY ENGINEERING COLLEGE (AUTONOMOUS)</strong></h2>
       <h4>( An Autonomous institution approved by UGC and Affiliated to JNTUH Hyderabad,</h4>
       <h4>        Accredited by NAAC with 'A' Grade,Accredited by NBA,    </h4>
       <h4> Maisammaguda, dhulapally,(Post, via Kompally),Secunderabad-500100 Ph:040-64634234)</h4>
     </div>
     
  </div>
  
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
            </a>
          </li>
          <li><a href="index.php">HOME</a></li>
        </ul>
      </div>
   
  <section class="our-webcoderskull padding-lg">
  <section id="t-cards">
<div class="container">
<ul class="row">
    <?php
        
        $_SESSION["yearName"]=$_GET["year"];
        $year=$_GET["year"];
        $branchname=$_SESSION['branch1'];
        
        $dir    = '/opt/lampp/htdocs/Books/Branch/'.$branchname.'/'.$year;
        $files1 = scandir($dir);
        foreach ($files1 as $dirname) {
          if($dirname!=='..' and $dirname!=='.' ){
          
          
             echo '<li class="col-12 col-md-6 col-lg-3">';
              echo  '<div class="cnt-block equal-hight" style="height:200px;">';
              echo'<figure><a href="files.php?subject='.$dirname.'"><img src="images/book.png" class="img-responsive" alt=""></a></figure>';
               echo  "<h3 id='subname'><a href='pdf.php?subject=$dirname'>$dirname</a></h3>";

                echo  "</div>";
              echo"</li>";
            }
          }
          ?>


          

      
    </ul>
  </div>
</section>

  
	
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >
</script>
</body></html>
<script type="text/javascript">

</script>
</body>
</html>

