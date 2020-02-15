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
    background: url(../images/PTRCimage6.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 550px;
}

.jumbotron2 {
    background: url(../images/PTRCimage5.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 550px;
}

.center {
	text-align: center;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="#">Port Talbot Rock Climbing</a>
  <a class="hoveringchange" href="WebDevIndex.php">Home</a>
  <a class="active" href="WebDevUpdates.php">Updates</a>
  <a class="hoveringchange" href="WebDevReviews.php">Reviews</a>
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

<div class="center">

<h1> News </h1>
<p>Here you can find updates to the courses here at Port Talbot Rock Climbing</p>

<section class="jumbotron"></section>
<h1>13/02/20 Update</h1>
<p> Hey there competitors! You'll be happy to know we've just introduced a few new courses specifically for you! Level 5 difficulty and higher courses have just been added to the north side of the rock climbing building. Have fun! <p>

<section class="jumbotron2"></section>
<h1>5/02/20 Update</h1>
<p> Hey there beginners! You'll be happy to know we've just introduced a few new courses specifically for you! Level 1 difficulty and higher courses have just been added to the east side of the rock climbing building. Have fun! <p>




</div>

<div class="footer">
  <a href="WebDevIndex.php">Home</a>
  <a href="WebDevUpdates.php">Updates</a>
  <a href="WebDevReviews.php">Reviews</a>
  <a href="WebDevAboutUs.php">About Us</a>
</div>


</body>