<?php

$dsn = 'mysql:host=localhost;dbname=porttalbotrockclimbing';
$dbUName = "root";
$dbPassword = "";
$dbh = new PDO($dsn, $dbUName, $dbPassword);

$un=$_POST["un"];

$stmt = $dbh->prepare("SELECT * FROM customers WHERE Username = :un");
$stmt->bindParam(':un', $un);

if($stmt->execute())
{
    while($record = $stmt->fetch())
    {
		echo "Customer ID= " . $record["CustomerID"] . "<br/>";
        echo "First Name= " . $record["FirstName"] . "<br/>";
		echo "Surname= " . $record["Surname"] . "<br/>";
		echo "Email= " . $record["Email"] . "<br/>";
		echo "Contact= " . $record["PhoneNumber"] . "<br/>";
		echo "Emergency Contact= " . $record["EmergancyContactName"] . "<br/>";
		echo "Emergency Number= " . $record["EmergancyNumber"] . "<br/>";
		echo "Username= " . $record["Username"] . "<br/>";
		echo "Password= " . $record["Password"] . "<br/>" . "<br/>";
		
    }
}


?>

