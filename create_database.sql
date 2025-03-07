-- Create database
CREATE DATABASE IF NOT EXISTS jaguar_bus_coaches;
USE jaguar_bus_coaches;

-- Create bookings table
CREATE TABLE IF NOT EXISTS bookings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    passenger_name VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    destination VARCHAR(100) NOT NULL,
    departure_time DATETIME NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
