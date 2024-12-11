<?php
header("Location: application.php");
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

$sql = "INSERT INTO `application` (`Apply_ID`, `Application_Year`, `App_First_Name`, `App_Middle_Name`, `App_Last_Name`, `App_First_Name_Pref`, `Apply_Date`, `Grade_Level`, `Lottery_Alias`, `Offer_Date`, `Lottery_Status`, `Sibling_YN`, `Employee_YN`, `BoardMember_YN`, `Founder_YN`, `Sibling_Applying`, `Sibling_Linking_ID`, `stu_MultipleBirths_YN`, `stu_MultipleBirthNumber`, `stu_Sib1Name`, `Student_ID`)
VALUES ('". $_POST['app_id']."', '". $_POST['app_year']."', '". $_POST['app_first']."', '". $_POST['app_middle']."', '". $_POST['app_last']."', '". $_POST['app_pref']."', '". $_POST['app_date']."', '". $_POST['grade_level']."', '". $_POST['alias']."', '". $_POST['offer_date']."', '". $_POST['status']."', '". $_POST['sibling']."', '". $_POST['employee']."', '". $_POST['board']."', '". $_POST['founder']."', '". $_POST['sibling_apply']."', '". $_POST['sibling_link']."', '". $_POST['mult_birth']."', null, '". $_POST['sibling_name']."', '". $_POST['stud_id']."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>