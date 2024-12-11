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
$table = 'school';

// Table's primary key
$primaryKey = 'School_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'School_ID', 'dt' => 0),
    array('db' => 'School_Name', 'dt' => 1),
    array('db' => 'Public_flag', 'dt' => 2),
    array('db' => 'School_Type', 'dt' => 3),
    array('db' => 'SAU', 'dt' => 4),
    array('db' => 'SAU_ID', 'dt' => 5),
    array('db' => 'County', 'dt' => 6),
    array('db' => 'Location', 'dt' => 7),
    array('db' => 'Mailing_Street', 'dt' => 8),
    array('db' => 'Mailing_City', 'dt' => 9),
    array('db' => 'Mailing_Zip', 'dt' => 10),
    array('db' => 'Phone', 'dt' => 11),
    array('db' => 'Grade_Low', 'dt' => 12),
    array('db' => 'Grade_High', 'dt' => 13),
    array('db' => 'Contact', 'dt' => 14),
    array('db' => 'Contact_Email', 'dt' => 15),
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