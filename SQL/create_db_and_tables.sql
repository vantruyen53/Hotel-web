create database hotel;

use hotel;

create table roomsTypes(
	roomTypeID int auto_increment primary key,
    roomTypeName varchar(200),
    roomTypePrice int,
    price_per_night int,
    max_occupancy int
);

create table rooms(
	roomID int auto_increment primary key, 
    roomNumber varchar(20) unique,
    roomStatus varchar (100),
    roomDescription  varchar(4000),
    roomImg varchar(1000), -- url img
    roomTypeId int,
    FOREIGN KEY (roomTypeId) references roomsTypes(roomTypeID) ON DELETE CASCADE
);

create table amenities (
	amenitiesID int auto_increment primary key,
    amenitiesName varchar(100),
    amenitiesIcon varchar (100) -- class icon of fontawesome
);

create table roomAmenities (
    amenitiesID int,
    roomID int,
    primary key (roomID, amenitiesID),
    foreign key (amenitiesID) references amenities(amenitiesID) on delete cascade,
    foreign key (roomID) references rooms(roomID) on delete cascade
);
create table customers(
	customerID int auto_increment primary key,
    customerName varchar(100),
    customerPhone varchar(100),
    customerEmail varchar(100)
);

create table services(
	servicesID int auto_increment primary key,
    servicesName varchar(100),
    servicesPrice DECIMAL(10,2),
    servicesDescription varchar(4000),
    serviceImg varchar (400), -- url img
    servicesDuration varchar(100) -- like 'one hour'
);

create table menu(
	menuID int auto_increment primary key,
    menuName varchar(100),
    menuImg varchar(400), -- url img
    menuPrice DECIMAL(10,2),
    menuMeal varchar(100), -- like breakfast, lunch, dinner
    menuDescriptions varchar(4000)
);

create table bookings(
	bookingID int auto_increment primary key,
	customerID int,
    roomID int,
    bookingDate datetime DEFAULT CURRENT_TIMESTAMP,
    checkInDate datetime,
    checkOutDate datetime,
    guestsNumber int,
    totalAmount DECIMAL(10,2),
    bookingStatus varchar(100),
    paymentStatus varchar(100),
    foreign key ( customerID) references customers(customerID ) on delete cascade,
	foreign key (roomID ) references rooms(roomID) on delete cascade
);

create table bookingServices(
	bookingServicesID int auto_increment primary key,
    servicesID int,
    customerID int,
    bookingID int,
    bookingServicesDate datetime,
    totalAmount DECIMAL(10,2),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    foreign key (servicesID) references services(servicesID) on delete cascade,
	foreign key (customerID) references customers(customerID) on delete cascade,
    foreign key (bookingID) references bookings(bookingID) on delete cascade
);

create table menuRequest(
	menuRequestID int auto_increment primary key,
    menuID int,
    totalAmount DECIMAL(10,2),
    customerID int,
    bookingID int,
    menuRequestDate datetime,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	foreign key (menuID) references menu(menuID) on delete cascade,
	foreign key (customerID) references customers(customerID) on delete cascade,
    foreign key (bookingID) references bookings(bookingID) on delete cascade
);

create table contact(
	contactID int auto_increment primary key,
    customerName varchar(100),
    customerphone varchar(100),
    customerEmail varchar(100),
    contactDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    contactNote TEXT
);