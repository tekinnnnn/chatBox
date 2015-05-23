<?php
session_start();
require_once 'db.php';

header("Content-type: application/json");

$data = array();
$data["return"] = false;

if (isset($_POST["msg"]) && isset($_POST["user"])) {

    $msg = $_POST["msg"];

    $query = $DB->prepare("INSERT INTO messages VALUES (null,:msg,:sender,now())");
    $query->bindParam(":msg", $msg);
    $query->bindParam(":sender", $_POST["user"]);
    $query->execute();
    if ($query->rowCount() > 0) {
        $data["return"] = true;
    }
}

echo json_encode($data);

?>