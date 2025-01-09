CREATE Database hotel;
USE hotel;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'mamun', '1234', 'Abdullah Al Mamun', 'mamunwnn@gmail.com'),
(3, 'zinnat', 'zinnat', 'Fathima Zinnat ', 'zinat@gmail.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');



CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Premium familiy', '0000-00-00', '0000-00-00', '', 0, 'false'),
(29, 'Premium familiy', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Premium familiy', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Premium familiy', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Premium familiy', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Couple', '0000-00-00', '0000-00-00', '', 0, 'false'),
(34, 'Couple', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Couple', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Couple', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Couple', '0000-00-00', '0000-00-00', '', 0, 'false');



CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Couple', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 17000),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 25500),
('Premium familiy', 5, 5, 0, 1, 'double', 'AC, TV, WIFI', 30000);


ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);


ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);


ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

