<?php
    include('../BE/connectdb.php');
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $dsn = 'mysql:host=' . DB . ';dbname=' . DB_DATABASE . ';charset=utf8';

    $pdo = new PDO($dsn, DB_userName, DB_passWord, $options);

    $stmt = $pdo->query('
        SELECT rooms.roomID, rooms.roomName, rooms.roomTypeID, roomTypes.roomTypeName, roomTypes.roomTypePrice
        FROM rooms
        JOIN roomTypes ON rooms.roomTypeID = roomTypes.roomTypeID;
    ');

    $rooms = $stmt->fetchAll();

     echo json_encode($rooms);
?>