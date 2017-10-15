<?php



$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;


if(!empty($_GET['state']))
{
  if(!empty($_GET['district']))
  {
    if(!empty($_GET['role']))
    {
      if(!empty($_GET['exp']))
      {

   $state= $_GET['state'];
    $district= $_GET['district'];

    $role= $_GET['role'];
    $exp= $_GET['exp'];

    $query= "SELECT * FROM employee_user WHERE employee_user.cid='$role' AND employee_user.exp='$exp' AND employee_user.state ='$state'  AND employee_user.district ='$district' ";
   $data = mysqli_query($con,$query) or die("Fail17");
   $num = mysqli_num_rows($data);
   if($num>0)
   {
     $success = 1;
     echo"<table border='2'>";
     while($row= mysqli_fetch_assoc($data))
   {

      echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

     //session_start();
   }

   echo"</table>";//$_SESSION['success']=1;
     //$_SESSION['row'] = $row;
   }


   else {
     echo"No results found";
   //  session_start();
   //  $_SESSION['success']=0;
   }
 }

   else {
     $state= $_GET['state'];
      $district= $_GET['district'];

      $role= $_GET['role'];
      $exp= $_GET['exp'];

      $query= "SELECT * FROM employee_user WHERE employee_user.cid='$role' AND employee_user.state ='$state'  AND employee_user.district ='$district' ";
     $data = mysqli_query($con,$query) or die("Fail17");
     $num = mysqli_num_rows($data);
     if($num>0)
     {
       $success = 1;
       echo"<table border='2'>";
       while($row= mysqli_fetch_assoc($data))
     {

        echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

       //session_start();
     }

     echo"</table>";//$_SESSION['success']=1;
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
   if(!empty($_GET['role']))
   {


   if(!empty($_GET['exp']))
   {

$state= $_GET['state'];
 $district= $_GET['district'];

 $role= $_GET['role'];
 $exp= $_GET['exp'];

 $query= "SELECT * FROM employee_user WHERE employee_user.exp='$exp' AND employee_user.state ='$state'  AND employee_user.cid ='$role' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
  $success = 1;
  echo"<table border='2'>";
  while($row= mysqli_fetch_assoc($data))
{

   echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

  //session_start();
}

echo"</table>";//$_SESSION['success']=1;
  //$_SESSION['row'] = $row;
}


else {
  echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}
}

else {
  $state= $_GET['state'];
   $district= $_GET['district'];

   $role= $_GET['role'];
   $exp= $_GET['exp'];

   $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.cid ='$role' ";
  $data = mysqli_query($con,$query) or die("Fail17");
  $num = mysqli_num_rows($data);
  if($num>0)
  {
    $success = 1;
    echo"<table border='2'>";
    while($row= mysqli_fetch_assoc($data))
  {

     echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

    //session_start();
  }

  echo"</table>";//$_SESSION['success']=1;
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

   if(!empty($_GET['role']))
   {

$state= $_GET['state'];
 $district= $_GET['district'];

 $role= $_GET['role'];
 $exp= $_GET['exp'];

 $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.district ='$district' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
  $success = 1;
  echo"<table border='2'>";
  while($row= mysqli_fetch_assoc($data))
{

   echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

  //session_start();
}

echo"</table>";//$_SESSION['success']=1;
  //$_SESSION['row'] = $row;
}


else {
  echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}
}

else {
  $state= $_GET['state'];
   $district= $_GET['district'];

   $role= $_GET['role'];
   $exp= $_GET['exp'];

   $query= "SELECT * FROM employee_user WHEREemployee_user.state ='$state'  ";
  $data = mysqli_query($con,$query) or die("Fail17");
  $num = mysqli_num_rows($data);
  if($num>0)
  {
    $success = 1;
    echo"<table border='2'>";
    while($row= mysqli_fetch_assoc($data))
  {

     echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

    //session_start();
  }

  echo"</table>";//$_SESSION['success']=1;
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

if(!empty($_GET['exp']))
{

$state= $_GET['state'];
$district= $_GET['district'];

$role= $_GET['role'];
$exp= $_GET['exp'];

$query= "SELECT * FROM employee_user WHERE employee_user.exp='$exp' AND employee_user.state ='$state'  AND employee_user.district ='$district' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
$success = 1;
echo"<table border='2'>";
while($row= mysqli_fetch_assoc($data))
{

echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

//session_start();
}

echo"</table>";//$_SESSION['success']=1;
//$_SESSION['row'] = $row;
}


else {
echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}
}

else {
$state= $_GET['state'];
$district= $_GET['district'];

$role= $_GET['role'];
$exp= $_GET['exp'];

$query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.district ='$district' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
 $success = 1;
 echo"<table border='2'>";
 while($row= mysqli_fetch_assoc($data))
{

  echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

 //session_start();
}

echo"</table>";//$_SESSION['success']=1;
 //$_SESSION['row'] = $row;
}


else {
 echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}

}



   if(!empty($_GET['exp']))
   {

$state= $_GET['state'];
 $district= $_GET['district'];

 $role= $_GET['role'];
 $exp= $_GET['exp'];

 $query= "SELECT * FROM employee_user WHERE employee_user.exp='$exp' AND employee_user.state ='$state'  AND employee_user.cid ='$role' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
  $success = 1;
  echo"<table border='2'>";
  while($row= mysqli_fetch_assoc($data))
{

   echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

  //session_start();
}

echo"</table>";//$_SESSION['success']=1;
  //$_SESSION['row'] = $row;
}


else {
  echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}
}

else {
  $state= $_GET['state'];
   $district= $_GET['district'];

   $role= $_GET['role'];
   $exp= $_GET['exp'];

   $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.cid ='$role' ";
  $data = mysqli_query($con,$query) or die("Fail17");
  $num = mysqli_num_rows($data);
  if($num>0)
  {
    $success = 1;
    echo"<table border='2'>";
    while($row= mysqli_fetch_assoc($data))
  {

     echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

    //session_start();
  }

  echo"</table>";//$_SESSION['success']=1;
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

   if(!empty($_GET['role']))
   {

$state= $_GET['state'];
 $district= $_GET['district'];

 $role= $_GET['role'];
 $exp= $_GET['exp'];

 $query= "SELECT * FROM employee_user WHERE  employee_user.state ='$state'  AND employee_user.district ='$district' ";
$data = mysqli_query($con,$query) or die("Fail17");
$num = mysqli_num_rows($data);
if($num>0)
{
  $success = 1;
  echo"<table border='2'>";
  while($row= mysqli_fetch_assoc($data))
{

   echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

  //session_start();
}

echo"</table>";//$_SESSION['success']=1;
  //$_SESSION['row'] = $row;
}


else {
  echo"No results found";
//  session_start();
//  $_SESSION['success']=0;
}
}

else {
  $state= $_GET['state'];
   $district= $_GET['district'];

   $role= $_GET['role'];
   $exp= $_GET['exp'];

   $query= "SELECT * FROM employee_user WHEREemployee_user.state ='$state'  ";
  $data = mysqli_query($con,$query) or die("Fail17");
  $num = mysqli_num_rows($data);
  if($num>0)
  {
    $success = 1;
    echo"<table border='2'>";
    while($row= mysqli_fetch_assoc($data))
  {

     echo"<tr><td>{$row['fname']}</td><td>{$row['address']}</td><tr>";

    //session_start();
  }

  echo"</table>";//$_SESSION['success']=1;
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
