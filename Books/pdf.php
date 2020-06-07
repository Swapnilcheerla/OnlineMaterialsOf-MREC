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
        <div class="row">
                           <?php
                     $branchname=$_SESSION["branch1"];
                     $year=$_SESSION["yearName"];
                     $subject=$_SESSION['subject'];
                     $dir = "Branch/".$branchname."/".$year."/".$subject;

                     // Open a directory, and read its contents
                     if (is_dir($dir)){
                       if ($dh = opendir($dir)){
                         while (($file = readdir($dh)) !== false){
                           if($file!=='..' and $file!=='.' ){

                             $result = explode('.',$file);



                        
                            ?>
                       
                             <div class="col-sm-6 col-md-3">
                                <div class="panel panel-default panel-card">
                                    <div class="panel-heading">
                                        <img src="https://unsplash.imgix.net/12/barley.jpg?q=75&fm=jpg&s=f39de5ca1970a13dbe6af6c86b3c47ec" />
                                        <button class="btn btn-primary btn-sm" role="button"><a href='Branch/<?php echo $branchname.'/'.$year.'/'.$subject.'/'.$file;?>' target=_BLANK download><span id="dwld">Download</span></a></button>
                                    </div>
                                    <div class="panel-figure">
                                        <img class="img-responsive img-circle" src="images/book.png" />
                                    </div>
                                    <div class="panel-body text-center">
                                        <h4 class="panel-header"></h4>
                                       <?php echo $result[0];?>
                                    </div>
                                    <div class="panel-thumbnails">
                                    <strong>Author: <?php echo $result[1]; ?></strong>
                                    
                                    </div>
                                    <button class="btnt successt"><a href='Branch/<?php echo $branchname.'/'.$year.'/'.$subject.'/'.$file;?>' target=_BLANK >View</a></button>
                                </div>   
    	                	</div>

                        
        <?php
                            }
                         }
                         closedir($dh);
                       }
                     }


        ?>
        </div>
        </div>
        </section>
                    </div>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>

</body></html>
<script type="text/javascript">

</script>
</body>
</html>




