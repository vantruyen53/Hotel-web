-- CREATE DATABASE cherryBlossom;
USE cherryBlossom;

-- Bảng các loại phòng (4 loại)
CREATE TABLE roomTypes(
    roomTypeID INT AUTO_INCREMENT PRIMARY KEY,
    roomTypeName VARCHAR(200) NOT NULL,
    roomTypePrice DECIMAL(10,2) NOT NULL, -- Giá per person per night
    roomNumber int NOT NULL, -- Số phòng (có thể dùng roomID)
    roomTypeCapacity INT NOT NULL -- Số người tối đa
);

-- Bảng các phòng cụ thể (16 phòng tổng cộng)
CREATE TABLE rooms(
    roomID INT AUTO_INCREMENT PRIMARY KEY, 
    roomTypeID INT NOT NULL,
    roomName varchar(100),
    roomStatus ENUM('available', 'maintenance', 'occupied') DEFAULT 'available',
    FOREIGN KEY (roomTypeID) REFERENCES roomTypes(roomTypeID) ON DELETE CASCADE
);

-- Bảng khách hàng
CREATE TABLE customers(
    customerID INT AUTO_INCREMENT PRIMARY KEY,
    customerFirstName VARCHAR(100) NOT NULL,
    customerLastName VARCHAR(100) NOT NULL,
    customerPhone VARCHAR(20) NOT NULL,
    customerEmail VARCHAR(100) NOT NULL,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Bảng dịch vụ (5 loại: Tea ceremony, Hot spring, Massage, Meditation, Sauna)
CREATE TABLE services(
    serviceID INT AUTO_INCREMENT PRIMARY KEY,
    serviceName VARCHAR(100) NOT NULL,
    servicePrice DECIMAL(10,2) NOT NULL, -- Giá per person
    serviceDuration VARCHAR(100) -- VD: "1 hour", "30 minutes"
);

-- Bảng đặt phòng chính
CREATE TABLE bookings(
    bookingID INT AUTO_INCREMENT PRIMARY KEY,
    customerID INT NOT NULL,
    roomID INT NOT NULL,
    checkInDate DATE NOT NULL,
    checkOutDate DATE NOT NULL,
    adultsCount INT NOT NULL DEFAULT 0,
    childrenCount INT NOT NULL DEFAULT 0,
    totalGuests INT NOT NULL,
    roomTotalAmount DECIMAL(10,2) NOT NULL, -- Chỉ tiền phòng
    servicesTotalAmount DECIMAL(10,2) DEFAULT 0, -- Tổng tiền dịch vụ
    grandTotal DECIMAL(10,2) NOT NULL, -- Tổng cộng tất cả
    bookingStatus ENUM('pending', 'confirmed', 'checked_in', 'checked_out', 'cancelled') DEFAULT 'pending',
    specialNotes TEXT,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    updatedAt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (customerID) REFERENCES customers(customerID) ON DELETE CASCADE,
    FOREIGN KEY (roomID) REFERENCES rooms(roomID) ON DELETE CASCADE
);

-- Bảng chi tiết dịch vụ trong booking phòng
CREATE TABLE bookingServices(
    bookingServiceID INT AUTO_INCREMENT PRIMARY KEY,
    bookingID INT NULL, -- NULL = standalone service booking (không đặt phòng)
    customerID INT NOT NULL, -- Luôn cần thông tin khách
    serviceID INT NOT NULL,
    serviceDate DATE NOT NULL,
    serviceTime VARCHAR(50), -- VD: "11:00 AM", "2:00 PM"
    participantsCount INT NOT NULL, -- Số người tham gia
    unitPrice DECIMAL(10,2) NOT NULL, -- Giá per person
    totalAmount DECIMAL(10,2) NOT NULL, -- participantsCount * unitPrice
    bookingType ENUM('with_room', 'standalone') NOT NULL, -- Phân biệt loại đặt
    serviceStatus ENUM('pending', 'confirmed', 'completed', 'cancelled') DEFAULT 'pending',
    specialRequests TEXT,
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (bookingID) REFERENCES bookings(bookingID) ON DELETE CASCADE,
    FOREIGN KEY (customerID) REFERENCES customers(customerID) ON DELETE CASCADE,
    FOREIGN KEY (serviceID) REFERENCES services(serviceID) ON DELETE CASCADE
);

-- Bảng liên hệ
CREATE TABLE contacts(
    contactID INT AUTO_INCREMENT PRIMARY KEY,
    customerID VARCHAR(200) NOT NULL,
    contactMessage TEXT NOT NULL,
    contactStatus ENUM('new', 'in_progress', 'resolved') DEFAULT 'new',
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE feedBack(
	feedBackID INT AUTO_INCREMENT PRIMARY KEY,
    rate int,
    rateContent text,
    customerID varchar(100),
    createdAt DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customerID) REFERENCES customers(customerID) ON DELETE CASCADE
);