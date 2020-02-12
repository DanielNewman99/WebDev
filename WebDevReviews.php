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


<div class="center">



<form action="WebDevSubmitReview.php" method="post">

<h1>Port Talbot Rock Climbing Reviews</h1> <br>

<?if(@$_SESSION["Username"]!="")//if there's something in there, user is logged in
			{?>
Screen Name: <input type="text" name="scn"><br><br>
Review: <input type="text" name="rev"><br><br>

<input type="submit" value="Send">
</form>


<p>Here you are welcome to send in reviews about Port Talbot Rock Climbing. Please take into consideration the following rules: No swearing, no inciting hate or harrasment.</p>
<br><br>

<? include "coninfo.php"; ?>
<?
$query="SELECT * FROM reviews ORDER BY TimeStamp DESC"; 

$result = mysqli_query($link,$query) or die("Could not execute query");




	while ($r=mysqli_fetch_array($result)) //get row
		{ ?>
		<div class="styletime">
		<?
			echo $r["ReviewID"]."<br>"; 
		?>
		<div class="stylename">
		<?
			echo $r["ScreenName"]."<br>"; 
		?>
		</div>
		<div class="styletime">
		<?
			echo $r["TimeStamp"]."<br>"; 
		?>
		</div>
		<div class="stylereview">
		<?
			echo $r["Review"]."<br><br>"; 
		?>
		</div>
		<?
		}

}
				else
				{ ?>
				You Must be logged in to access this feature.
				<br><br><a href="WebDevLogin.php">Log in now!</a>
				<? } 


?>

</div>








<div class="footer">
  <a href="WebDevIndex.php">Home</a>
  <a href="WebDevUpdates.php">Updates</a>
  <a href="WebDevReviews.php">Reviews</a>
  <a href="WebDevAboutUs.php">About Us</a>
</div>


</body>


