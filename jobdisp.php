
<html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <head>
    <title>PMKVY JOB PORTAL</title>
  </head>
  <body>
<p>BROWSE JOBS</p><br/><br/>


<div id="navcontainer">
<ul>
<li><a href="">Milk</a></li>
<li><a href="#">Eggs</a></li>
<li><a href="#">Cheese</a></li>
<li><a href="#">Vegetables</a></li>
<li><a href="#">Fruit</a></li>
</ul>
</div>

<button type = "button" value="BY COMPANY " name="comp">BY COMPANY</button>
<button type = "button" value="BY CATEGORY " name="cat">BY CATEGORY</button>
<button type = "button" value="BY CITY " name="city">BY CITY</button>
<button type = "button" value="BY TYPE " name="type">BY TYPE</button>
<button type = "button" value="BY INDUSTRY " name="ind">BY INDUSTRY</button>


 <script>

$('#sign').click(function(){
     $.ajax({

          url:"job.php",
          method:"POST",
          data:$('#jobpost').serialize(),

          success:function(data)
          {
               alert(data);
               $('#jobpost')[0].reset();
          }
     });
});
 </script>




<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'pmkvy');
define('DB_USER','root');
define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;


 $query= "SELECT * FROM jobs_list ORDER BY cid";
  $data = mysqli_query($con,$query) or die("Fail17");

  echo"<table border='2'>";

       if($data)
       {


       while($row= mysqli_fetch_assoc($data))
       {

         echo"<br></br><tr><td>{$row['title']}</td><td>{$row['category']}</td><td>{$row['location']}</td><tr>";
       }

       }


       echo"</table>";







?>
