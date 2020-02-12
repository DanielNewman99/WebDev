<?session_start();?>
<?

include "coninfo.php"; 

$scn=$_POST["scn"];
$rev=$_POST["rev"];


$query="INSERT INTO `reviews` (`ReviewID`, `Review`, `TimeStamp`, `ScreenName`) VALUES (NULL, '$rev', NOW(), '$scn')";

$result=mysqli_query($link,$query);

echo $query;

header("location:WebDevReviews.php");
?>