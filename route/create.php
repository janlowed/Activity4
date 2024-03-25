<?php
include '../controller/UserController.php';
header('Content-type: application/json');

$create = new UserController();
$create->insert($_POST);

echo json_encode($create);

?>