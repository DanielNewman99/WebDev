<?session_start();?>
<?
$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";
$dbh = new PDO($dsn, $dbUName, $dbPassword);

$id=$_POST["id"];
        $stmt = $dbh->prepare( "DELETE FROM reviews WHERE ReviewID=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

header("location:WebDevAdmin.php"); 
?>

