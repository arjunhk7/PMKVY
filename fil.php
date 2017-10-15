

<html>
<body>

<form name=filter id=filter action="fil.php">
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




            <h3>Skills</h3>
            <select name = "role" class=" form-control">

              <option selected="selected" value=""> ----Skills----</option>
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





          <h3>Gender</h3>
          <select name="gen">
            <option selected="selected" value=""> ----Gender----</option>
          <option value="M">Male</option>
          <option value="F">Female</option>

        </SELECT>

        <br></br>
        <input type= "submit" name="sub" id="sub" value="Submit">
 </form>



 <?php

if(isset($_GET['sub']))
{ $a=0;

   $query= "SELECT * FROM employee_user ";
 if(!empty($_GET['state']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   $state = $_GET['state'];
   $query= $query." employee_user.state = '$state'  ";
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
   $query= $query." employee_user.district = '$district' ";
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
   $query= $query." employee_user.catid = '$sector'  ";
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
   $query= $query." employee_user.QP_Code = '$role'  ";
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
   $query= $query." employee_user.exp = '$exp' ";

 }

 if(!empty($_GET['gen']))
 {
   if($a==0)
   {
     $query= $query." WHERE ";
     $a++;
   }
   elseif ($a>0) {
     $query= $query." AND ";

   }
   $gen = $_GET['gen'];
   $query= $query." employee_user.gender= '$gen' ";

 }








      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {    echo"</table>";
         echo"<tr><td>Name</td><td>Address</td><td>Age</td><td>QP_Code</td><tr>";
        while($row= mysqli_fetch_assoc($data))
      {
        if(!empty($_GET['district']))
        {
        $lat= $row['la'];

            $lon = $row['lo'];
                $q=" SELECT * ,( 6371 * acos( cos( radians( $lat ) ) * cos( radians( la ) ) *cos( radians( lo ) - radians( $lon )) +sin(radians($lat)) *sin(radians(la)))) distance FROM employee_user having distance < 200 ORDER BY distance";

        $daa = mysqli_query($con,$q) ;
        while($roow= mysqli_fetch_assoc($daa))
        {
         echo"<tr><td>{$roow['fname']}</td><td>{$roow['address']}</td><td>{$roow['age']}</td><td>{$roow['QP_Code']}</td><tr>";
        }
      }
      else
      {
        echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><td>{$row['age']}</td><td>{$row['QP_Code']}</td><tr>";
      }
        //session_start();
      }
      echo"</table>";
    }
      else {

        echo "No result";
      }
}

?>
