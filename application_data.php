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
$table = 'application';

// Table's primary key
$primaryKey = 'Apply_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'Apply_ID', 'dt' => 0),
    array('db' => 'Application_Year', 'dt' => 1),
    array('db' => 'App_First_Name', 'dt' => 2),
    array('db' => 'App_Middle_Name', 'dt' => 3),
    array('db' => 'App_Last_Name', 'dt' => 4),
    array('db' => 'App_First_Name_Pref', 'dt' => 5),
    array('db' => 'Apply_Date', 'dt' => 6),
    array('db' => 'Grade_Level', 'dt' => 7),
    array('db' => 'Lottery_Alias', 'dt' => 8),
    array('db' => 'Offer_Date', 'dt' => 9),
    array('db' => 'Lottery_Status', 'dt' => 10),
    array('db' => 'Sibling_YN', 'dt' => 11),
    array('db' => 'Employee_YN', 'dt' => 12),
    array('db' => 'BoardMember_YN', 'dt' => 13),
    array('db' => 'Founder_YN', 'dt' => 14),
    array('db' => 'Sibling_Applying', 'dt' => 15),
    array('db' => 'Sibling_Linking_ID', 'dt' => 16),
    array('db' => 'stu_MultipleBirths_YN', 'dt' => 17),
    array('db' => 'stu_MultipleBirthNumber', 'dt' => 18),
    array('db' => 'stu_Sib1Name', 'dt' => 19),
    array('db' => 'Student_ID', 'dt' => 20),
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