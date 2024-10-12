
<?php

require_once ("connect.php");

$login = "CREATE TABLE IF NOT EXISTS login1(
  login_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(10) UNIQUE NOT NULL,
  login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

$result=mysqli_query($con,$login);
if($result)
{
 // echo "<br>Table create successfully";
} else {
  echo "Error creating database" . $con->error;
}   
?>

<?php

require_once ("connect.php");

$reg = "CREATE TABLE IF NOT EXISTS regis(
reg_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
password VARCHAR(30) UNIQUE NOT NULL, 
repass VARCHAR(30) UNIQUE NOT NULL,
country VARCHAR(50) NOT NULL,
gender VARCHAR(10) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$res=mysqli_query($con,$reg);
if($res)
{
//echo "<br>Table create successfully";
} else {
echo "Error creating database" . $con->error;
}


?>

<?php

$feed = "CREATE TABLE  IF NOT EXISTS fdback (
feed_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
ratings VARCHAR(20) NOT NULL,
comments TEXT NOT NULL,
submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result=mysqli_query($con,$feed);
if($result)
{
//echo "<br>Table create successfully";
} else {
echo "Error creating database" . $con->error;
}

?>

<?php

$contact = "CREATE TABLE IF NOT EXISTS contacts (
contact_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
subject VARCHAR(100) NOT NULL,
message TEXT NOT NULL,
contact_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result=mysqli_query($con,$contact);
if($result)
{
//echo "<br>Table create successfully";
} else {
echo "Error creating database" . $con->error;
}
?>

<?php

$checkout = "CREATE TABLE IF NOT EXISTS checkout(
checkout_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50)  NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
phone VARCHAR(10) UNIQUE NOT NULL,
address VARCHAR(80) NOT NULL,
country VARCHAR(40) NOT NULL,
city VARCHAR(40) NOT NULL,
zipcode VARCHAR(7) NOT NULL,
checkout_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result=mysqli_query($con,$checkout);
if($result)
{
//echo "<br>Table create successfully";
} else {
echo "Error creating database" . $con->error;
}
?>

<?php
$comments = "CREATE TABLE IF NOT EXISTS comment(
com_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) UNIQUE NOT NULL,
suggestion VARCHAR(30) NOT NULL,
com_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$result=mysqli_query($con,$comments);
if($result)
{
//echo "<br>Table create successfully";
} else {
echo "Error creating database" . $con->error;
}  
?>