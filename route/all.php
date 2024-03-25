<?php
include '../controller/UserController.php';
header('Content-type: application/json');

$all = new UserController();
$alldata = $all->getAll();

echo json_encode($alldata);

?>