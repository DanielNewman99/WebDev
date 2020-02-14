<?

//include "coninfo.php"; 

//$query="INSERT INTO customers(FirstName,Surname,Email, PhoneNumber, EmergancyContactName, EmergancyNumber, Username,Password) VALUES('$fn','$sn','$email','$phonenum','$econtact','$ephonenum','$username','$password')";

//$result=mysqli_query($link,$query);

session_start();?>
<?


$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";
$dbh = new PDO($dsn, $dbUName, $dbPassword);

$fn=$_POST["fn"];
$sn=$_POST["sn"];
$email=$_POST["email"];
$username=$_POST["username"];
$phonenum=$_POST["phonenum"];
$econtact=$_POST["econtact"];
$ephonenum=$_POST["ephonenum"];
$password=$_POST["password"];


$stmt = $dbh->prepare("INSERT INTO customers(CustomerID, FirstName,Surname,Email, PhoneNumber, EmergancyContactName, EmergancyNumber, Username,Password) VALUES  
                     (NULL, :fn,:sn, :email, :username,:phonenum,:econtact, :ephonenum, :password)");

$stmt->bindParam(':fn', $fn);
$stmt->bindParam(':sn', $sn);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':phonenum', $phonenum);
$stmt->bindParam(':econtact', $econtact);
$stmt->bindParam(':ephonenum', $ephonenum);
$stmt->bindParam(':password', $password);

$stmt->execute();

$stmt->closeCursor();	

$dbh = NULL;

echo $query;

header("location:WebDevLogin.php");


?>