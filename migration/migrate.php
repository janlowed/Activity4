<?php
include 'user_table.php';
header('Content-type: application/json');

$migrate = new UserMigration();
$migrate->createTable();

echo json_encode($migrate);
?>