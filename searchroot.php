<?php
//session_destroy();


define('DB_HOST', 'localhost');
define('DB_NAME', 'categori');
define('DB_USER','root');
define('DB_PASSWORD','');
   $success = 0;
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
   if(isset($_POST['loc']))
   {
     if(isset($_POST['ind']))
     {
       if(!empty($_POST['word']))
       {
       $word= $_POST['word'];
        $ind= $_POST['ind'];
         $loc= $_POST['loc'];
         $query= "SELECT * FROM jobs_list,course_list WHERE course_list.QP_name like '%$word%' AND jobs_list.location ='$loc'  AND  jobs_list.category='$ind'";
        $data = mysqli_query($con,$query) or die("Fail17");
        $num = mysqli_num_rows($data);
        if($num>0)
        {
          $row= mysqli_fetch_assoc($data);
          $success = 1;
        //  session_start();
        //  $_SESSION['success']=1;
        //  $_SESSION['row'] = $row;
        }

        else {
        //  session_start();
        //  $_SESSION['success']=0;
        }

     }

     else {


        $ind= $_POST['ind'];
         $loc= $_POST['loc'];
         $query= "SELECT * FROM jobs_list WHERE jobs_list.location ='$loc'  AND  jobs_list.category='$ind'";
        $data = mysqli_query($con,$query) or die("Fail17");
        $num = mysqli_num_rows($data);
        if($num>0)
        {
          $row= mysqli_fetch_assoc($data);
          $success = 1;
        //  session_start();
        //  $_SESSION['success']=1;
        //  $_SESSION['row'] = $row;
        }

        else {
        //  session_start();
        //  $_SESSION['success']=0;
        }

     }



   }
   else {
     $word= $_POST['word'];

       $loc= $_POST['loc'];
       $query= "SELECT * FROM jobs_list,course_list WHERE course_list.QP_name like '%$word%' AND jobs_list.location ='$loc'";
      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {
        $row= mysqli_fetch_assoc($data);
        $success = 1;
      //  session_start();
      //  $_SESSION['success']=1;
      //  $_SESSION['row'] = $row;
      }

      else {
  //      session_start();
    //    $_SESSION['success']=0;
      }
   }
 }
 else {
   $word= $_POST['word'];
    $ind= $_POST['ind'];
     $loc= $_POST['loc'];
     $query= "SELECT * FROM jobs_list,course_list WHERE course_list.QP_name like '%$word%'  AND  jobs_list.category='$ind'";
    $data = mysqli_query($con,$query) or die("Fail17");
    $num = mysqli_num_rows($data);
    if($num>0)
    {
      $row= mysqli_fetch_assoc($data);
      $success = 1;
      //session_start();
      //$_SESSION['success']=1;
      //$_SESSION['row'] = $row;
    }

    else {
      //session_start();
      //$_SESSION['success']=0;
    }
 }



   ?>
