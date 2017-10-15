<?

define('DB_HOST', 'localhost');
define('DB_NAME', 'pmkvy');
define('DB_USER','root');
define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;


 $query= "SELECT * FROM jobs_list ORDER BY cid";
  $data = mysqli_query($con,$query) or die("Fail17");



       if($data)
       {


       while($row= mysqli_fetch_assoc($data))
       {
                $t=$row['cid'];
                $quer= "SELECT name FROM company WHERE company.company_id='$t'";
                $daa = mysqli_query($con,$quer);
                $rw= mysqli_fetch_assoc($daa);


        }
                ?>
