<?php
require './Connection.php';
Connection::openConnection();
$sql = 'SELECT * FROM users';
$stmt = Connection::$conn->prepare($sql);
$stmt->execute();
$data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
};
$result = ['users' => $data];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);
