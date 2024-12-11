<?php
header("Location: loi.php");
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

$sql = "INSERT INTO `loi` (`LOI_ID`, `Student_Name`, `Submission_Date`, `LOI_ClassOf`, `Parent_Name`, `P_Email`, `P_Phone`, `Sending_School`, `Status`, `Student_ID`)
VALUES ('". $_POST['loiid']."', '". $_POST['stu_name']."', '". $_POST['sub_name']."', '". $_POST['class_of']."', '". $_POST['pname']."', '". $_POST['pem']."', '". $_POST['pphone']."', '". $_POST['send']."', '". $_POST['stat']."', '". $_POST['studid']."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>