<?php
 include('connectdb.php');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "Dữ liệu đã được gửi!<br>";
    echo "Tên người dùng: " . $_POST['username'];
    $userName = $_POST['username'];
    $userPhone = $_POST['userphone'];
    $userEmail = $_POST['useremail'];
    $userSeates = $_POST['userseats'];
    $userTime = $_POST['selectedOption'];
    $userDate = $_POST['userdate'];
    $serviceId = $_POST['serviceID'];
    $totalPrice = $_POST['totalPrice'];

    $select = 'SELECT customerEmail, customerID  FROM customers WHERE customerEmail =?';
    $stmt = $connect->prepare($select);
    $stmt->bind_param('s', $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();
    $bookingType = 'standalone';


    if($result ->num_rows>0){
        $updateUser = 'UPDATE customers SET customerFirstName = ?, customerPhone=? WHERE customerEmail =?';
        $row = $result->fetch_assoc();
        $customerID = $row['customerID'];
        $stmt = $connect->prepare($updateUser);
        $stmt->bind_param('sss', $userName, $userPhone, $userEmail);
        $stmt->execute();

        $insertbookingService = "INSERT INTO bookingServices (customerID, serviceID, serviceDate, serviceTime, participantsCount, totalAmount, bookingType)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connect->prepare($insertbookingService);
        $stmt->bind_param('iissids', $customerID, $serviceId, $userDate, $userTime, $userSeates, $totalPrice, $bookingType);
        if ($stmt->execute()) {
            echo "Registration successful!"; // Redirect to login page
            header("Location: ../UserFE/services.php?success=1");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    } else{
        $insertNewUser = "INSERT INTO customers (customerFirstName, customerPhone, customerEmail)
        VALUES (?, ?, ?)";
        $stmt = $connect->prepare($insertNewUser);
        $stmt->bind_param('sss', $userName, $userPhone, $userEmail);
        $stmt->execute();
        $customerID = $connect->insert_id;
        
        $insertbookingService = "INSERT INTO bookingServices (customerID, serviceID, serviceDate, serviceTime, participantsCount, totalAmount, bookingType)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $connect->prepare($insertbookingService);
        $stmt->bind_param('iissids', $customerID, $serviceId, $userDate, $userTime, $userSeates, $totalPrice, $bookingType );
        if ($stmt->execute()) {
            echo "Registration successful!"; // Redirect to login page
            header("Location: ../UserFE/services.php?success=1");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}else {
    echo "Form chưa được submit.";
}
?>