<?php
header("Location: school.php");
$servername = "localhost";
$username = "lwill";
$password = "test";
$dbname = "Enrollment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `school` (`School_ID`, `School_Name`, `Public_flag`, `School_Type`, `SAU`, `SAU_ID`, `County`, `Location`, `Mailing_Street`, `Mailing_City`, `Mailing_Zip`, `Phone`, `Grade_Low`, `Grade_High`, `Contact`, `Contact_Email`)
VALUES ('". $_POST['schid']."', '". $_POST['scname']."', '". $_POST['flag']."', '". $_POST['type']."', '". $_POST['sa']."', '". $_POST['said']."', '". $_POST['cou']."', '". $_POST['loc']."', '". $_POST['str']."', '". $_POST['cit']."', '". $_POST['zip']."', '". $_POST['pho']."', '". $_POST['grlow']."', '". $_POST['grhigh']."', '". $_POST['con']."', '". $_POST['conem']."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>