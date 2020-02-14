<?session_start();?>
<html>

<head>
<style>

.footer {
	background-color: #2B2929;
	overflow: hidden;
}

.footer a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav {
  background-color: #2B2929;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 23px;
}


.hoveringchange:hover {
  background-color: #9B5FA1;
}


.topnav a.active {
  background-color: #9B5FA1;
  color: white;
}

.jumbotron {
    background: url(../images/PTRCimage3.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 550px;
}


.center {
	text-align: center;
}

.stylereview {
	font-size: 28px;
}

.stylename {
	font-size: 28px;
}

.styletime {
	font-size: 15px;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="#">Port Talbot Rock Climbing</a>
  <a class="hoveringchange" href="WebDevIndex.php">Home</a>
  <a class="hoveringchange" href="WebDevUpdates.php">Updates</a>
  <a class="active"  href="WebDevReviews.php">Reviews</a>
  <a class="hoveringchange" href="WebDevAboutUs.php">About Us</a>
  <?if(@$_SESSION["Username"]!="")//if there's something in there, user is logged in
	{?>
	<a class="hoveringchange" href="WebDevLogout.php">Log Out</a>

	<?}
	else
	{
		?>
	<a class="hoveringchange" href="WebDevLogin.php">Log In</a> <?
	} ?>
</div>





<section class="jumbotron"></section>
<?include "coninfo.php";?>

<div class="center">

<?if(@$_SESSION["Username"]=="Admin")
			{?>
<?php 
$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";
$dbh = new PDO($dsn, $dbUName, $dbPassword);
?>

<?
foreach($dbh->query('SELECT * FROM reviews ORDER BY TimeStamp DESC') as $record)
{
	?>
	<div class="styletime">
		<?
			echo $record["ReviewID"]."<br>"; 
		?>
		<div class="stylename">
		<?
			echo $record["ScreenName"]."<br>"; 
		?>
		</div>
		<div class="styletime">
		<?
			echo $record["TimeStamp"]."<br>"; 
		?>
		</div>
		<div class="stylereview">
		<?
			echo $record["Review"]."<br><br>"; 
		?>
		</div>
		
		<form action="WebDevDeleteReview.php" method="post">
		<input type="hidden" value="<?echo $record["ReviewID"]?>" name ="id"> 
		<input type="submit" value="Delete">
		</form>
		<?
    	
}
?>
	
	
	<?}
		
				else
				{ ?>
				Only Admins may view this page.
				
				<? } ?> <br><br> 
		
			
			

</div>


<?if(@$_SESSION["Username"]=="Admin")
			{?>
<form action="WebDevSearchResults.php" method="post">
<h3>Search Users by Username</h3>
Search: <input type="text" name="un"><br><br>
<input type="submit" value="Search">
</form>
			<?}?>





<div class="footer">
  <a href="WebDevIndex.php">Home</a>
  <a href="WebDevUpdates.php">Updates</a>
  <a href="WebDevReviews.php">Reviews</a>
  <a href="WebDevAboutUs.php">About Us</a>
</div>


</body>