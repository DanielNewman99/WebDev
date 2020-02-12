<?session_start();

$_SESSION["Username"]="";//remove username

session_destroy();//remove session

header("location:WebDevIndex.php");//auto relocate
?>