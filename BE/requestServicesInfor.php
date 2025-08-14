<?php
    include('connectdb.php');

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $dsn = 'mysql:host=' . DB . ';dbname=' . DB_DATABASE . ';charset=utf8';

    try {
        $pdo = new PDO($dsn, DB_userName, DB_passWord, $options);

        // Truy vấn tất cả dịch vụ
        $stmt = $pdo->query("SELECT serviceID, serviceName, serviceDuration, servicePrice FROM services");
        $services = $stmt->fetchAll();

        // Trả dữ liệu JSON về cho client
        echo json_encode($services);

    } catch (\PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
?>