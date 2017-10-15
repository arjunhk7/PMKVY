<?php
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'pmkvy');
  define('DB_USER','root');
  define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;

   		 $jname = $_POST['jname'];
         $loc = $_POST['loc'];
         $jdet = $_POST['jdet'];
         $jtype = $_POST['jtype'];
         $jcat = $_POST['jcat'];
         $jex = $_POST['jex'];
         $sal = $_POST['sal'];
      
         $ldate = $_POST['ldate'];

          $query = "INSERT INTO jobs_list (title,location,details,category,job_type,job_experience,expect_salary,last_date) VALUES ('$jname','$loc','$jdet','$jcat','$jtype','$jex','$sal','$ldate')";
          $data = mysqli_query($con,$query) or die("Fail17");
           if($data) {

              
               echo "JOB POSTED.";
              
            }
            else
            {
               
               echo "JOB NAME ALREADY EXISTS.";
               
            }
            ?>