<?

include "coninfo.php"; 

$fn=$_POST["fn"];
$sn=$_POST["sn"];
$email=$_POST["email"];
$username=$_POST["username"];
$phonenum=$_POST["phonenum"];
$econtact=$_POST["econtact"];
$ephonenum=$_POST["ephonenum"];
$password=$_POST["password"];

$query="INSERT INTO customers(FirstName,Surname,Email, PhoneNumber, EmergancyContactName, EmergancyNumber, Username,Password) VALUES('$fn','$sn','$email','$phonenum','$econtact','$ephonenum','$username','$password')";

$result=mysqli_query($link,$query);

echo $query;

header("location:WebDevLogin.php");
?>