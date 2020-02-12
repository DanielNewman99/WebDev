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
    background: url(../images/PTRCimage2.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 450px;
}

.jumbotron2 {
    background: url(../images/PTRCimage3.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 550px;
}

.jumbotron3 {
    background: url(../images/PTRCimage4.jpg) no-repeat #242830;
    background-position: center center;
    background-size: 100% 100%;
    min-height: 550px;
}


@media screen and (min-width: 480px) {
    .jumbotron {
        min-height: 350px;
    }
}

@media screen and (min-width: 767px) {
    .jumbotron {
        min-height: 550px;
    }


}

.center {
	text-align: center;
}
</style>

</head>
<body>

<div class="topnav">
  <a href="#">Port Talbot Rock Climbing</a>
  <a class="active" href="WebDevIndex.php">Home</a>
  <a class="hoveringchange" href="WebDevUpdates.php">Updates</a>
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



<section class="jumbotron"></section>

<div class="center">
<h1> What we do:</h1>

<section class="jumbotron2"></section>
<h1>Here's a title</h1>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac velit nisi. Maecenas mauris quam, interdum vitae aliquet quis, hendrerit a massa. Ut ullamcorper lobortis turpis vel accumsan. Vivamus ut urna volutpat dui pellentesque pulvinar. Nulla volutpat enim non diam elementum aliquet. Sed sed diam venenatis, rutrum sem at, pulvinar nibh. Donec mollis ut orci eget ullamcorper. In hac habitasse platea dictumst. </p>
<section class="jumbotron3"></section>
<h1>Here's a title</h1>
<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac velit nisi. Maecenas mauris quam, interdum vitae aliquet quis, hendrerit a massa. Ut ullamcorper lobortis turpis vel accumsan. Vivamus ut urna volutpat dui pellentesque pulvinar. Nulla volutpat enim non diam elementum aliquet. Sed sed diam venenatis, rutrum sem at, pulvinar nibh. Donec mollis ut orci eget ullamcorper. In hac habitasse platea dictumst.</p>
</div>

<div class="footer">
  <a href="WebDevIndex.php">Home</a>
  <a href="WebDevUpdates.php">Updates</a>
  <a href="WebDevReviews.php">Reviews</a>
  <a href="WebDevAboutUs.php">About Us</a>
</div>



</body>
</html>