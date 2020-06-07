<?php
//error_reporting(0);
session_start();
if($_GET["subject"]){
    $_SESSION['subject']=$_GET["subject"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <title>Books_portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pdf.css">
    <link rel="stylesheet" href="css/movie.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/box_card.css" rel="stylesheet">
</head>
<body>
<div>
  <div class=" text-center">
     
         <h2 ><strong>MALLA REDDY ENGINEERING COLLEGE (AUTONOMOUS)</strong></h2>
       <h4>( An Autonomous institution approved by UGC and Affiliated to JNTUH Hyderabad,</h4>
       <h4>        Accredited by NAAC with 'A' Grade,Accredited by NBA,    </h4>
       <h4> Maisammaguda, dhulapally,(Post, via Kompally),Secunderabad-500100 Ph:040-64634234)</h4>
     </div>
     
  </div>

<div class="container">
        <div id="mySidenav" class="sidenav">
          <a href="index.php" id="about">HOME</a>
          <a href="pdf.php?subject=<?php echo $_SESSION['subject'];?>" id="blog">NOTES</a>
          <a href="videos.php?subject=<?php echo $_SESSION['subject'];?>" id="projects">VIDEOS</a>
          <a href="links.php?subject=<?php echo $_SESSION['subject'];?>" id="contact">LINKS </a>
        </div>

        <div style="margin-left:80px;">
        <div class="container1">
          <?php
        $branchname=$_SESSION["branch1"];
        $year=$_SESSION["yearName"];
        $subject=$_GET["subject"];
        $dir = "videos/".$subject;
  
  // Open a directory, and read its contents
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        if($file!=='..' and $file!=='.' ){
          
          $result = explode('.',$file);
           
            ?>
            <div class="movie-card">
		              <div class="movie-header babyDriver">
			                <div class="header-icon-container">
				               <video width="100%" controls>
					              <source src="videos/<?php echo $subject."/".$file;?>" type="video/mp4">
						              </video>
			                </div>
		                </div><!--movie-header-->
		              <div class="movie-content">
			                <div class="movie-content-header">
                      
					              <h3 class="movie-title"><?php echo $result[0];?></h3>
				
				
                      </div>
                      <button class="btnt successt"><a href="videos/<?php echo $subject."/".$file;?>" download >Download</a></button>
		      	      </div><!--movie-content-->
            </div><!--movie-card-->
            
          <?php
        }
      }
      closedir($dh);
    }
  }
  
?>
            
        
          </div>
        
</div>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>

</body></html>
<script type="text/javascript">

</script>
</body>
</html>




