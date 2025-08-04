<?php
try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

// Store Message in db
function storeMessage($fname, $lname, $email, $phone, $message, $timestamp) {
    global $db;
    $sql = $db->prepare("INSERT INTO MESSAGES (FNAME, LNAME, EMAIL, PHONE, MESSAGE, TIMESTAMP) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bindParam(1, $fname);
    $sql->bindParam(2, $lname);
    $sql->bindParam(3, $email);
    $sql->bindParam(4, $phone);
    $sql->bindParam(5, $message);
    $sql->bindParam(6, $timestamp);
    $sql->execute();
}

?>