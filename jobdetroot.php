<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'pmkvy');
define('DB_USER','root');
define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
   $id= $_POST['id'];
   $query= "SELECT * FROM jobs_list WHERE job_id = $id";
    $data = mysqli_query($con,$query) or die("Fail17");



         if($data)
         {


      $row= mysqli_fetch_assoc($data);
      $com= $row['cid'];
    }
        $quey= "SELECT * FROM company WHERE company_id = $com";
       $dat = mysqli_query($con,$quey) or die("Fail17");



            if($dat)
            {
                $roow= mysqli_fetch_assoc($dat);
              }
                ?>
