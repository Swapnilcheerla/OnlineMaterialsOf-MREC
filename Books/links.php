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
   
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/box_card.css" >
        <link rel="stylesheet" type="text/css" href="css/pdf.css">
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
        
      <?php
      $branchname=$_SESSION["branch1"];
      $year=$_SESSION["yearName"];
      $subject=$_SESSION['subject'];
      $dir = "links/".$subject;
      if (is_dir($dir))
      {
        if ($dh = opendir($dir))
        {
          while (($file = readdir($dh)) !== false)
          {
      

          $handle = fopen("links/".$subject."/".$file, "r");
          if ($handle) 
          {
            while (($line = fgets($handle)) !== false)
             {
        // process the line read.
        ?>
        <div class="success1 div1">
  <p><strong><a href="<?php echo $line ;?>" target=_blank><?php echo $line ?></a></strong> </p>
</div>
  <?php
              }

          fclose($handle);
          } 
    // error opening the file.
          }
        }
      }
      ?>
  
         </div>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>

</body></html>
<script type="text/javascript">

</script>
</body>
</html>




