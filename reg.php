<?php
$con=mysqli_connect("wncc-iitb.org","sushant","wnccsushant","scratch_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Team (team, name1, phone1, email1, name2, phone2, email2)
VALUES
('$_POST[team]',$_POST[name1]','$_POST[phone1]','$_POST[email1]', $_POST[name2]','$_POST[phone2]','$_POST[email2]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
mysqli_close($con);
header('Location: registrations.php');
/*create table Team(
team varchar(50),
name1 varchar(50),
phone1 varchar(50),
email1 varchar(50),  
name2 varchar(50),
phone2 varchar(50),
email2 varchar(50), 
submission varchar(100)
primary key(email1, email2)  
);*/
?>

