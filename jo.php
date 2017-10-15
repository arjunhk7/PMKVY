<html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <body>
<p>JOB DETAILS</p><br/><br/>
  <li>Job Type</li><br/><br/>
  <li>Job Experience</li><br></br>
    <li>Posted On</li><br></br>
      <li>Last Date for Application</li><br></br>
        <li>Location</li><br></br>
          <li>Expected Salary</li><br></br>


  <form action="jobpost.php" method="POST" id="jobpost">
  <input type="text" name="jname" placeholder="Job Title" /><br></br>
  <input type="text" name="loc" placeholder="Location" /><br></br>
  <input type="text" name="jdet" placeholder="Job Details" /><br></br>
  
  <p>JOB CATEGORY</p><br/><br/>
<select name="jcat">
<option selected="selected">----Job Category----</option>
<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'pmkvy');
define('DB_USER','root');
define('DB_PASSWORD','');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
$querye = "SELECT category FROM category" ;
$result = mysqli_query ($con,$querye);
while($row= mysqli_fetch_assoc($result)){
echo "<option value=\"{$row['category']}\">";
       echo $row['category'];
       echo "</option>";
}

?>
</select><br/><br/>

 <p>JOB TYPE</p><br/><br/>
<select name="jtype">
  <option value="ft">FULL TIME</option>
  <option value="pt">PART TIME</option>
  <option value="r">REMOTE</option>
  <option value="f">FREELANCER</option>
</select><br/><br/>

</select><br/><br/>

 <p>PREFFERED JOB EXPERIENCE</p><br/><br/>
<select name=jex>
  <option value="0">FRESHER</option>
  <option value="1">1 - 2 YEARS</option>
  <option value="3">2 -5 YEARS</option>
  <option value="6">MORE THAN 5 YEARS</option>
</select><br/><br/>


<p>EXPECTED SALARY</p><br/><br/>
<select name=sal>
  <option value="0">LESS THAN 5k</option>
  <option value="1">5 - 10k</option>
  <option value="3">10 - 15k</option>
  <option value="6">MORE THAN 15k</option>
</select><br/><br/>

  <input type="text" name="tags" placeholder="ENTER TAGS"/><br></br>
  <input type="button" name="sign" value="POST JOB" id= "sign"/><br></br>

  </form>
  </body>
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
  </html>