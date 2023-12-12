-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 12:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UES`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Customer_ID` int(11) NOT NULL,
  `Customer_Name` text NOT NULL,
  `Customer_Email` text NOT NULL,
  `Customer_Phone` text NOT NULL,
  `Customer_Address` text NOT NULL,
  `Customer_Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Customer_ID`, `Customer_Name`, `Customer_Email`, `Customer_Phone`, `Customer_Address`, `Customer_Password`) VALUES
(1, 'Mya Mya', 'myamya@gmail.com', '09510731065', 'Yangon, Myanmar', '123'),
(2, 'Winnie', 'winnie@gmail.com', '09448360029', 'Yangon, Myanmar', '123'),
(3, 'Zyan', 'zyan@gmail.com', '+447874684901', 'London, UK', '123'),
(4, 'Mike', 'mike@gmail.com', '+1(413)3450024', 'Massachusetts, USA', '123'),
(5, 'Susan', 'susan@gmail.com', '+6545783002', 'Singapore, Singapore', '123'),
(11, 'Maria', 'maria@gmail.com', '091231231', 'Yng, MM', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` text NOT NULL,
  `Employee_Email` text NOT NULL,
  `Employee_DOB` text NOT NULL,
  `Employee_MaritalStatus` text NOT NULL,
  `Employee_Position` text NOT NULL,
  `Employee_Address` text NOT NULL,
  `Employee_Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`Employee_ID`, `Employee_Name`, `Employee_Email`, `Employee_DOB`, `Employee_MaritalStatus`, `Employee_Position`, `Employee_Address`, `Employee_Password`) VALUES
(1, 'Win Ko', 'winko@gmail.com', '5-5-1984', 'Married', 'Assistant', 'Yangon, Myanmar', 'asd123'),
(2, 'Theint Theint', 'theinttheint@gmail.com', '6-6-1997', 'Single', 'Assistant', 'NayPyiTaw, Myanmar', 'asd123'),
(3, 'Hla Hla', 'hlahla@gmail.com', '4-4-1973', 'Married', 'Assistant', 'MawLaMyine, Myanmar', 'asd123'),
(4, 'Khin Khin', 'khinkhin@gmail.com', '2-2-1999', 'Single', 'Part-Timer', 'Yangon, Myanmar', 'asd123'),
(10, 'Cindy ', 'cindy@gmail.com', '19-6-1990', 'Single', 'Database Administrator', 'Yangon, Myanmar', 'asd123!@#');

-- --------------------------------------------------------

--
-- Table structure for table `OrderLine`
--

CREATE TABLE `OrderLine` (
  `OrderLine_ID` int(11) NOT NULL,
  `Orders_ID` int(11) NOT NULL,
  `Payment_Type` text NOT NULL,
  `Card_Number` text NOT NULL,
  `Total` float NOT NULL,
  `Issue_Date` date NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Orders_ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Delivery_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Orders_ID`, `Customer_ID`, `Quantity`, `Product_ID`, `Delivery_Date`) VALUES
(1, 4, 1, 13, '2020-06-23'),
(12, 11, 2, 13, '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Category` text NOT NULL,
  `Product_Brand` text NOT NULL,
  `Product_Price` float NOT NULL,
  `Product_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Product_ID`, `Product_Name`, `Product_Category`, `Product_Brand`, `Product_Price`, `Product_Image`) VALUES
(1, 'Apple Series 5 Nike', 'Smartwatch', 'Apple', 399, 'series 5 Nike.jpeg'),
(2, 'Apple Series 3', 'Smartwatch', 'Apple', 199, 'series 3.jpeg'),
(3, 'Apple Series 5 Hermes ', 'Smartwatch ', 'Apple', 1300, 'series 5 Hermes.jpeg'),
(4, 'Apple Series 5', 'Smartwatch', 'Apple', 399, 'series 5.jpeg'),
(5, 'Samsung Galaxy Watch Active', 'Smartwatch ', 'Samsung', 150, 'Galaxy Watch Active.jpeg'),
(6, 'Samsung Fit2 Pro', 'Smartwatch', 'Samsung', 199, 'Gear Fit2 Pro.jpeg'),
(7, 'Samsung Galaxy Gear S2', 'Smartwatch', 'Samsung', 160, 'Gear S2.jpeg'),
(8, 'Fossil Gen 5', 'Smartwatch ', 'Fossil ', 295, 'Gen 5.jpeg'),
(9, 'Fossil Gen 4', 'Smartwatch', 'Fossil ', 129, 'Gen 4.jpeg'),
(10, 'Fitbit Versa 2 SE', 'Smartwatch', 'Fitbit', 230, 'Versa 2 SE.jpeg'),
(11, 'Fitbit Versa Ionic ', 'Smartwatch', 'Fitbit', 250, 'Versa Ionic.jpeg'),
(12, 'Fitbit Versa 2', 'Smartwatch', 'Fitbit', 200, 'Versa 2.jpeg'),
(13, 'Fitbit Versa Lite', 'Smartwatch ', 'Fitbit', 160, 'Versa Lite.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `Stock_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`Stock_ID`, `Product_ID`, `Quantity`, `Admin_ID`) VALUES
(1, 1, 20, 10),
(2, 2, 20, 10),
(3, 3, 20, 10),
(4, 4, 20, 10),
(5, 5, 20, 10),
(6, 6, 20, 10),
(7, 7, 20, 10),
(8, 8, 20, 10),
(9, 9, 20, 10),
(10, 10, 20, 10),
(11, 11, 20, 10),
(12, 12, 20, 10),
(13, 13, 20, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD UNIQUE KEY `Customer_Email_2` (`Customer_Email`) USING HASH,
  ADD KEY `Customer_Email` (`Customer_Email`(768));

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD KEY `Employee_Email` (`Employee_Email`(768)),
  ADD KEY `Employee_Name` (`Employee_Name`(768)),
  ADD KEY `Employee_Position` (`Employee_Position`(768));

--
-- Indexes for table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD PRIMARY KEY (`OrderLine_ID`),
  ADD KEY `Orders_ID` (`Orders_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Orders_ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`Stock_ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `OrderLine`
--
ALTER TABLE `OrderLine`
  MODIFY `OrderLine_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Orders_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Stock`
--
ALTER TABLE `Stock`
  MODIFY `Stock_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD CONSTRAINT `orderline_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `Employee` (`Employee_ID`),
  ADD CONSTRAINT `orderline_ibfk_4` FOREIGN KEY (`Orders_ID`) REFERENCES `Orders` (`Orders_ID`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `Product` (`Product_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`Customer_ID`) REFERENCES `Customer` (`Customer_ID`);

--
-- Constraints for table `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`Admin_ID`) REFERENCES `Employee` (`Employee_ID`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `Product` (`Product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
