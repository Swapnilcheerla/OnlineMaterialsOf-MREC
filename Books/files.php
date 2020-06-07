<?php
include('header.php');

?>

<div class="container" id="attp">
  
  <div> <input class="form-control" id="myInput" type="text" placeholder="Search..">       
</div>
  <table class="table table-bordered" id="tablefile">
  <thead class="thead-dark">
      <tr>
        <th>Book Name</th>
        <th>Author</th>

        <th>View</th>
        <th>Videos</th>
      </tr>
    </thead>
    <tbody id="myTable">
<?php
  $branchname=$_SESSION["branch1"];
  $year=$_SESSION["yearName"];
  $subject=$_GET["subject"];
  $dir = "Branch/".$branchname."/".$year."/".$subject;
  
  // Open a directory, and read its contents
  if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false){
        if($file!=='..' and $file!=='.' ){
          echo"<tr>";
          $result = explode('.',$file);
        echo "<td>".$result[0]."</td>";
        echo "<td>".$result[1]."</td>";
        echo "<td><button ><a href='Branch/$branchname/$year/$subject/  $file'>Download</a></button></td>";
        ?>
        <td>
        <video width="300" controls>
        <source src="videos/DBMS/<?php echo $result[0];?>.mp4" type="video/mp4">
        </td>
       
      </video>
        <?
         
        echo"</tr>";
        }
      }
      closedir($dh);
    }
  }
  
?>
</tbody></table></div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 


</body>
<script type='text/javascript'>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>