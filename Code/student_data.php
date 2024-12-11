<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See https://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - https://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'student';

// Table's primary key
$primaryKey = 'Student_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'Student_ID', 'dt' => 0),
    array('db' => 'First_Name', 'dt' => 1),
    array('db' => 'Middle_Name', 'dt' => 2),
    array('db' => 'Last_Name', 'dt' => 3),
    array('db' => 'First_Name_Pref', 'dt' => 4),
    array('db' => 'ClassOf', 'dt' => 5),
    array('db' => 'Home_Phone', 'dt' => 6),
    array('db' => 'DOB', 'dt' => 7),
    array('db' => 'Street', 'dt' => 8),
    array('db' => 'City', 'dt' => 9),
    array('db' => 'State', 'dt' => 10),
    array('db' => 'Zip', 'dt' => 11),
    array('db' => 'C1_First_Name', 'dt' => 12),
    array('db' => 'C1_Last_Name', 'dt' => 13),
    array('db' => 'C1_Relationship', 'dt' => 14),
    array('db' => 'C1_Custody', 'dt' => 15),
    array('db' => 'C1_Email', 'dt' => 16),
    array('db' => 'C2_First_Name', 'dt' => 17),
    array('db' => 'C2_Last_Name', 'dt' => 18),
    array('db' => 'C2_Relationship', 'dt' => 19),
    array('db' => 'C2_Custody', 'dt' => 20),
    array('db' => 'C2_Email', 'dt' => 21),
    array('db' => 'Records_Recieved', 'dt' => 22),
    array('db' => 'PS_Student_Number', 'dt' => 23),
    array('db' => 'Streak_ID', 'dt' => 24),
    array('db' => 'State_StudentNumber', 'dt' => 25),
    array('db' => 'LOI_ID', 'dt' => 26),
    array('db' => 'School_ID', 'dt' => 27),
    array('db' => 'Commit_ID', 'dt' => 28),
    array('db' => 'Student_Email', 'dt' => 29),
    array('db' => 'Apply_Id', 'dt' => 30)
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db' => 'Enrollment',
    'host' => 'localhost'
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);
?>