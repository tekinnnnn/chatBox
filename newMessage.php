<?php
session_start();
require_once 'db.php';

header("Content-type: application/json");

$data["return"] = false;
$data["msg"] = "";
$data["msgCount"] = "";
$data["newMsgCount"] = 0;

if (isset($_POST["msgCount"])) {

    $msgCount = $_POST["msgCount"];

    $query = $DB->query("SELECT * FROM messages LIMIT $msgCount, 1000");
    if ($query->rowCount() > 0) {
        $num = $query->rowCount();
        $messages = $query->fetchAll(PDO::FETCH_ASSOC);
        $data["return"] = true;
        $data["msg"] = $messages;
        $data["msgCount"] = $msgCount + $num;
        $data["newMsgCount"] = $num;
    } else {
    }
}

echo json_encode($data);

?>