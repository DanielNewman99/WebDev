<?session_start();
//print_r($_POST);
// include "coninfo.php";

$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";

$dbh = new PDO($dsn, $dbUName, $dbPassword);

$un=$_POST["un"];
$pw=$_POST["pw"];

$stmt = $dbh->prepare("SELECT * FROM customers WHERE Password like :pw AND Username like :un");
$stmt->bindParam(':un', $un);
$stmt->bindParam(':pw', $pw);

$stmt->execute();


$results = $stmt->fetch();

if($stmt->rowCount() == 1 )
{
    echo "Thank you for logging in<br><br>";
	$_SESSION["Username"]=$un;//set session variable ?>
	<a href="WebDevIndex.php">Back to main menu</a> <?
	header("location:WebDevIndex.php");//auto relocate
}
else
{
	echo "Sorry, your details are incorrect"; ?>
	<br><br><a href="WebDevLogin.php">Try again</a> <?
}
