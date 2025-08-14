<?php

    include('../BE/connectdb.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $userName = trim($_POST['username']);
        $userPhone = trim($_POST['userphone']);
        $userEmail = trim($_POST['useremail']);
        $userNote = trim($_POST['note']);
        

        $query = "INSERT INTO contacts (customerName, customerPhone, customerEmail, contactMessage) VALUES (?, ?, ?, ?)";
        $stmt = $connect->prepare($query);
        $stmt->bind_param("ssss", $userName, $userPhone, $userEmail, $userNote);

        if($stmt->execute()){
            header("Location: ../UserFE/contact.php?success=1");
            exit();
        } else {
            echo "<script>alert('Có lỗi xảy ra: " . $connect->error . "');</script>";
        }

        $stmt->close();
    };

     $connect->close();



?>