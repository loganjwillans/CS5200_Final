<?php
header("Location: student.php");
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

$sql = "INSERT INTO `student` (`Student_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `First_Name_Pref`, `ClassOf`, `Home_Phone`, `DOB`, `Street`, `City`, `State`, `Zip`, `C1_First_Name`, `C1_Last_Name`, `C1_Relationship`, `C1_Custody`, `C1_Email`, `C2_First_Name`, `C2_Last_Name`, `C2_Relationship`, `C2_Custody`, `C2_Email`, `Records_Recieved`, `PS_Student_Number`, `Streak_ID`, `State_StudentNumber`, `LOI_ID`, `School_ID`, `Commit_ID`, `Student_Email`, `Apply_ID`)
VALUES ('". $_POST['stud_id']."', '". $_POST['first']."', '". $_POST['middle']."', '". $_POST['last']."', '". $_POST['name_pref']."', '". $_POST['class']."', '". $_POST['phone']."', '". $_POST['birth']."', '". $_POST['stre']."', '". $_POST['cit']."', '". $_POST['zi']."', '". $_POST['c1_first']."', '". $_POST['c1_last']."', '". $_POST['c1_relate']."', '". $_POST['c1_cust']."', '". $_POST['c1_em']."', '". $_POST['c2_first']."', '". $_POST['c2_last']."', '". $_POST['c2_relate']."', '". $_POST['c2_cust']."', '". $_POST['c2_em']."', '". $_POST['rec_rec']."', '". $_POST['stu_num']."', '". $_POST['rec_rec']."', '". $_POST['stu_num']."', '". $_POST['streak']."', '". $_POST['state_num']."', '". $_POST['loi']."', '". $_POST['school']."', '". $_POST['commit']."', '". $_POST['ema']."', '". $_POST['apply']."')  ;
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>