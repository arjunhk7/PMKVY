<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'db1');
define('DB_USER','root');
define('DB_PASSWORD','');
$CompanyOptions = array();
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()) ;

$CustomerOptions = array();
$CompanyQueryString = 'SELECT id, name FROM companies';
$CompanyQuery = MySQLi_Query($con,$CompanyQueryString) or exit('Error in MySQL Query.<br />Query: ' . $CompanyQueryString . '<br />Error: ' . MySQL_Error());
while($Company = MySQLi_Fetch_Assoc($CompanyQuery)){
    $CompanyOptions[$Company['id']] = $Company['name'];
}
if(array_key_exists('Company', $_POST)){
    $CustomerQueryString = 'SELECT id, name FROM customers WHERE company = ' . (int)$_POST['Company'];
    $CustomerQuery = MySQLi_Query($con,$CustomerQueryString) or exit('Error in MySQL Query.<br />Query: ' . $CompanyQueryString . '<br />Error: ' . MySQL_Error());
    while($Customer = MySQLi_Fetch_Assoc($CustomerQuery)){
        $CustomerOptions[$Customer['id']] = $Customer['name'];
    }
}
?>
<form method="post">
    <select name="Company">
        <?php
        foreach($CompanyOptions as $ID => $Name){
            PrintF('<option value="&#37;s">%s</option>', $ID, $Name);
        }
        ?>
    </select>
    <input type="Submit" value="Update" />
    <select name="Customer">
        <?php
        foreach($CustomerOptions as $ID => $Name){
            PrintF('<option value="%s">%s</option>', $ID, $Name);
        }
        ?>
    </select>
</form>
