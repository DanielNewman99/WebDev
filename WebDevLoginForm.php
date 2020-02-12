<?session_start();
//print_r($_POST);
include "coninfo.php";
$un=$_POST["un"];
$pw=$_POST["pw"];

$query="SELECT * FROM customers WHERE Password like '$pw' AND Username like '$un'";
$result=mysqli_query($link,$query);

$numrows=mysqli_num_rows($result);

if($numrows==0)//wrong details
{
echo "Sorry, your details are incorrect";?>
<br><br><a href="WebDevLogin.php">Try again</a>
<?
}
else  //correct details - set up the session
{
echo "Thank you for logging in<br><br>";
$_SESSION["Username"]=$un;//set session variable
?>
<a href="WebDevIndex.php">Back to main menu</a>
<?	







header("location:WebDevIndex.php");//auto relocate
	
}