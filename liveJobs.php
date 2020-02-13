<?php
$dbDetails = array(
    'host' => 'root',
    'user' => 'team018',
    'pass' => 'SIpnz0Sjel',
    'db'   => 'team018'
);
 
// DB table to use
$table = 'problem';

// Table's primary key
$primaryKey = 'problem_no';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'problem_no', 'dt' => 'problem_no' ),
    array( 'db' => 'type',  'dt' => 'type' ),
    array( 'db' => 'personnel_id',   'dt' => 'personnel_id' ),
    array( 'db' => 'date',     'dt' => 'date' ),
    array( 'db' => 'description',     'dt' => 'description' )
);
 

 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);