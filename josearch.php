

<html>
<body>

<form name=filter id=filter action="josearch.php">
  <h3>State</h3>
  <select name = "state" >

    <option selected="selected" value="" >----STATE----</option>
    <?php

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'categori');
    define('DB_USER','root');
    define('DB_PASSWORD','');


    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;

    $querye = "SELECT * FROM state" ;
    $result = mysqli_query ($con,$querye);
    while($row= mysqli_fetch_assoc($result)){
    echo "<option value=\"{$row['state']}\">";
           echo $row['state'];
           echo "</option>";
    }

    ?>
  </select>

            <h3>District</h3>
            <select name = "district" >



              <option selected="selected" value="">----District----</option>
              <?php



              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
              $querye = "SELECT * FROM district" ;
              $result = mysqli_query ($con,$querye);
              while($row= mysqli_fetch_assoc($result)){
              echo "<option value=\"{$row['district']}\">";
                     echo $row['district'];
                     echo "</option>";
              }

              ?>
            </select>

            <h3>Sector</h3>
            <select name = "sector" class=" form-control">

              <option selected="selected" value=""> ----Sector----</option>
              <?php



              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
              $querye = "SELECT * FROM job_fields" ;
              $result = mysqli_query ($con,$querye);
              while($row= mysqli_fetch_assoc($result)){
              echo "<option value=\"{$row['Cat_id']}\">";
                     echo $row['Job_categories'];
                     echo "</option>";
              }

              ?>
            </select>




            <h3>Specific Jobs</h3>
            <select name = "role" class=" form-control">

              <option selected="selected" value=""> ----Specific Jobs----</option>
              <?php



              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
              $querye = "SELECT * FROM course_list" ;
              $result = mysqli_query ($con,$querye);
              while($row= mysqli_fetch_assoc($result)){
              echo "<option value=\"{$row['QP_code']}\">";
                     echo $row['QP_name'];
                     echo "</option>";
              }

              ?>
            </select>




            <h3>Expereince</h3>
            <select name="exp">
              <option selected="selected" value=""> ----Job Experience----</option>
              <?php



              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;
              $querye = "SELECT * FROM job_exp" ;
              $result = mysqli_query ($con,$querye);
              while($row= mysqli_fetch_assoc($result)){
              echo "<option value=\"{$row['id']}\">";
                     echo $row['name'];
                     echo "</option>";
              }

              ?>

            </select>







        <br></br>
        <input type= "submit" name="sub" id="sub" value="Search">
 </form>



 <?php

if(isset($_GET['sub']))
{ $a=0;

   $query= "SELECT * FROM jobs_list ";
 if(!empty($_GET['state']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   $state = $_GET['state'];
   $query= $query." jobs_list.state = '$state'  ";
   //echo $query;
 }

 if(!empty($_GET['district']))
 {

   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   elseif ($a>0) {
     $query= $query." AND ";

   }
   $district = $_GET['district'];
   $query= $query." jobs_list.district = '$district' ";
   //echo $query;
 }

 if(!empty($_GET['sector']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   elseif ($a>0) {
     $query= $query." AND ";

   }
   $sector = $_GET['sector'];
   $query= $query." jobs_list.category = '$sector'  ";
   //echo $query;
 }


 if(!empty($_GET['role']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   elseif ($a>0) {
     $query= $query." AND ";

   }
   $role = $_GET['role'];
   $query= $query." jobs_list.QP_Code = '$role'  ";
   //echo $query;
 }

 if(!empty($_GET['exp']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   elseif ($a>0) {
     $query= $query." AND ";

   }
   $exp = $_GET['exp'];
   $query= $query." jobs_list.job_experience = '$exp' ";

 }










      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {    echo"</table>";
         echo"<tr><td>Title</td><td>District</td><td>Job-Type</td><tr>";
        while($row= mysqli_fetch_assoc($data))
      {
        //if(!empty($_GET['district']))
        //{
        //$lat= $row['la'];

            //$lon = $row['lo'];
              //  $q=" SELECT * ,( 6371 * acos( cos( radians( $lat ) ) * cos( radians( la ) ) *cos( radians( lo ) - radians( $lon )) +sin(radians($lat)) *sin(radians(la)))) distance FROM employee_user having distance < 200 ORDER BY distance";

        //$daa = mysqli_query($con,$q) ;
        //while($roow= mysqli_fetch_assoc($daa))
        //{
         //echo"<tr><td>{$roow['fname']}</td><td>{$roow['address']}</td><td>{$roow['age']}</td><td>{$roow['QP_Code']}</td><tr>";
        //}
      //}
      //else
      //{
        echo"<tr><td>{$row['title']}</td><td>{$row['district']}</td><td>{$row['job_type']}</td><tr>";
      //}
        //session_start();
      }
      echo"</table>";
    }
      else {

        echo "No result";
      }
}

?>
