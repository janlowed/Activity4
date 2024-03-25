<?php
include '../controller/UserController.php';
header('Content-type: application/json');

$data = new UserController();
$search = $data->search($_GET);

echo json_encode($search);

?>