<?session_start();?>
<?


$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";
$dbh = new PDO($dsn, $dbUName, $dbPassword);

$scn=$_POST["scn"];
$rev=$_POST["rev"];


$stmt = $dbh->prepare("INSERT INTO reviews(ReviewID, Review, TimeStamp, ScreenName) VALUES  
                     (NULL,:rev, NOW(), :scn)");

$stmt->bindParam(':rev', $rev);
$stmt->bindParam(':scn', $scn);

$stmt->execute();

$stmt->closeCursor();	

$dbh = NULL;

echo $query;

header("location:WebDevReviews.php");


?>