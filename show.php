<html>
<body>
<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'categori');
define('DB_USER','root');
define('DB_PASSWORD','');
   $success = 0;

   $row;
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
   if(!empty($_GET['cat']))
   {
     if(!empty($_GET['state']))
     {
       if(!empty($_GET['district']))
       {
       $cat= $_GET['cat'];
        $state= $_GET['state'];
         $district= $_GET['district'];

         $query= "SELECT * FROM employee_user WHERE employee_user.catid ='$cat' AND employee_user.state ='$state'  AND employee_user.district ='$district' ";
        $data = mysqli_query($con,$query) or die("Fail17");
        $num = mysqli_num_rows($data);
        if($num>0)
        {
          $success = 1;
          while($row= mysqli_fetch_assoc($data))
        {
          echo " n ";
           echo $row['fname'];
          echo $row['address'];

          //session_start();
        }  //$_SESSION['success']=1;
          //$_SESSION['row'] = $row;
        }


        else {
          echo"No results found";
        //  session_start();
        //  $_SESSION['success']=0;
        }

     }
else {

        $cat= $_GET['cat'];
        $state= $_GET['state'];
        $district= $_GET['district'];
        $query= "SELECT * FROM employee_user WHERE employee_user.catid ='$cat' AND employee_user.state ='$state' ";
        $data = mysqli_query($con,$query) or die("Fail17");
        $num = mysqli_num_rows($data);
        if($num>0)
        {
          $success = 1;
          while($row= mysqli_fetch_assoc($data))
        {
          echo " n ";
           echo $row['fname'];
          echo $row['address'];

          //session_start();
        }
          //$_SESSION['success']=1;
          //$_SESSION['row'] = $row;





     }
     else {
       echo"No results found";
     //  session_start();
     //  $_SESSION['success']=0;
     }

     }
   }
   else {

     if(!empty($_GET['district']))
     {
     $cat= $_GET['cat'];
      $state= $_GET['state'];
       $district= $_GET['district'];

       $query= "SELECT * FROM employee_user WHERE employee_user.catid ='$cat' AND employee_user.district ='$district' ";
      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {
        $success = 1;
        while($row= mysqli_fetch_assoc($data))
      {
        echo " n ";
         echo $row['fname'];
        echo $row['address'];

        //session_start();
      }  //$_SESSION['success']=1;
        //$_SESSION['row'] = $row;
      }


      else {
        echo"No results found";
      //  session_start();
      //  $_SESSION['success']=0;
      }

   }
else {

      $cat= $_GET['cat'];
      $state= $_GET['state'];
      $district= $_GET['district'];
      $query= "SELECT * FROM employee_user WHERE employee_user.catid ='$cat' ";
      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {
        $success = 1;
        while($row= mysqli_fetch_assoc($data))
      {
          echo " n ";
         echo $row['fname'];
        echo $row['address'];

        //session_start();
      }
        //$_SESSION['success']=1;
        //$_SESSION['row'] = $row;





   }
   else {
     echo"No results found";
   //  session_start();
   //  $_SESSION['success']=0;
   }

   }


   }





 }
 else {

   if(!empty($_GET['state']))
   {
     if(!empty($_GET['district']))
     {
     $cat= $_GET['cat'];
      $state= $_GET['state'];
       $district= $_GET['district'];

       $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.district ='$district' ";
      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {
        $success = 1;
        while($row= mysqli_fetch_assoc($data))
      {
          echo " n ";
         echo $row['fname'];
        echo $row['address'];

        //session_start();
      }  //$_SESSION['success']=1;
        //$_SESSION['row'] = $row;
      }


      else {
        echo"No results found";
      //  session_start();
      //  $_SESSION['success']=0;
      }

   }
else {

      $cat= $_GET['cat'];
      $state= $_GET['state'];
      $district= $_GET['district'];
      $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state' ";
      $data = mysqli_query($con,$query) or die("Fail17");
      $num = mysqli_num_rows($data);
      if($num>0)
      {
        $success = 1;
        while($row= mysqli_fetch_assoc($data))
      {
        echo " n ";
         echo $row['fname'];
        echo $row['address'];

        //session_start();
      }
        //$_SESSION['success']=1;
        //$_SESSION['row'] = $row;





   }
   else {
     echo"No results found";
   //  session_start();
   //  $_SESSION['success']=0;
   }

   }
 }
 else {

   if(!empty($_GET['district']))
   {
   $cat= $_GET['cat'];
    $state= $_GET['state'];
     $district= $_GET['district'];

     $query= "SELECT * FROM employee_user WHERE  employee_user.district ='$district' ";
    $data = mysqli_query($con,$query) or die("Fail17");
    $num = mysqli_num_rows($data);
    if($num>0)
    {
      $success = 1;
      while($row= mysqli_fetch_assoc($data))
    {
      echo " n ";
       echo $row['fname'];
      echo $row['address'];

      //session_start();
    }  //$_SESSION['success']=1;
      //$_SESSION['row'] = $row;
    }


    else {
      echo"No results found";
    //  session_start();
    //  $_SESSION['success']=0;
    }

 }



 }

 }
























?>

</body>
</html>
