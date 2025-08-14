<?php
    include('connectdb.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "Dữ liệu đã được gửi!<br>";

        $userFirstName = $_POST['firstname'];
        $userLastName = $_POST['lasttname']; // Sửa lại
        $userPhone = $_POST['userphone']; // Sửa lại  
        $userEmail = $_POST['useremail']; // Sửa lại
        $userNote = $_POST['note'];
        $roomName = $_POST['roomName'];
        $roomCheckIn = $_POST['roomCheckIn'];
        $roomCheckOut = $_POST['roomCheckOut'];
        $roomAdults = $_POST['roomAdults'];
        $roomChildrens = $_POST['roomChildrens'];
        $roomTotal = $_POST['roomTotal'];

        $select = 'SELECT customerEmail, customerID FROM customers WHERE customerEmail =?';
        $stmt = $connect->prepare($select);
        $stmt->bind_param('s', $userEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        // 1. Lấy roomID từ roomName
        $selectRoom = 'SELECT roomID FROM rooms WHERE roomName = ?';
        $stmtRoom = $connect->prepare($selectRoom);
        $stmtRoom->bind_param('s', $roomName);
        $stmtRoom->execute();
        $roomResult = $stmtRoom->get_result();
        
        if($roomResult->num_rows > 0) {
            $roomRow = $roomResult->fetch_assoc();
            $roomID = $roomRow['roomID'];
        } else {
            echo "Không tìm thấy phòng!";
            exit;
        }

        $totalCustomer = (int)$roomAdults + (int)$roomChildrens;

        if($result->num_rows > 0){
            $updateUser = 'UPDATE customers SET customerFirstName = ?, customerPhone=? WHERE customerEmail =?';
            $row = $result->fetch_assoc();
            $customerID = $row['customerID'];
            $stmt = $connect->prepare($updateUser);
            $stmt->bind_param('sss', $userFirstName, $userPhone, $userEmail);
            $stmt->execute();

            $insertBookingRoom = "INSERT INTO bookings (customerID, roomID, checkInDate, checkOutDate, adultsCount, childrenCount, totalGuests, grandTotal, specialNotes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $connect->prepare($insertBookingRoom);
            $stmt->bind_param('iissiiiis', $customerID, $roomID, $roomCheckIn, $roomCheckOut, $roomAdults, $roomChildrens, $totalCustomer, $roomTotal, $userNote);
            if ($stmt->execute()) {
                header("Location: ../UserFE/stay.php?success=1");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            $insertNewUser = "INSERT INTO customers (customerFirstName, customerPhone, customerEmail)
            VALUES (?, ?, ?)";
            $stmt = $connect->prepare($insertNewUser);
            $stmt->bind_param('sss', $userFirstName, $userPhone, $userEmail);
            $stmt->execute();
            $customerID = $connect->insert_id;

            $insertBookingRoom = "INSERT INTO bookings (customerID, roomID, checkInDate, checkOutDate, adultsCount, childrenCount, totalGuests, grandTotal, specialNotes)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $connect->prepare($insertBookingRoom);
            $stmt->bind_param('iissiiiis', $customerID, $roomID, $roomCheckIn, $roomCheckOut, $roomAdults, $roomChildrens, $totalCustomer, $roomTotal, $userNote);

            if ($stmt->execute()) {
                header("Location: ../UserFE/stay.php?success=1");
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    }else {
        echo "Form chưa được submit.";
    }
?>