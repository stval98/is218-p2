--
-- Database: `yz746`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--
USE `sas238`;-- put your database name in the single quotes

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE  `accounts000` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts000` (`id`, `email`, `fname`, `lname`, `phone`, `birthday`, `gender`, `password`) VALUES
(1, 'mjlee@njit.edu', 'Mike', 'Lee', '974-555-5555', '2000-05-05', 'male', '1234'),
(2, 'janedoe@njit.edu', 'John', 'Doe', '555-555-5555', '1950-07-07', 'female', '1234'),
(3, 'ml4q73@njit.edu', NULL, NULL, NULL, NULL, NULL, '1'),
(4, 'ml24q73@njit.edu', '1', '1', '111', '0011-01-01', 'male', '2'),
(5, 'ml241q73@njit.edu', '1', '1', '111', '0011-01-01', 'male', '1'),
(6, 'js829', '', '', '', '0000-00-00', '', '123'),
(7, 'test@njit.edu', 'yong', 'zhao', '911', '0000-00-00', 'male', '1234'),
(8, 'Rebecca@gmail.com', 'Rebecca', 'cortes', '7777', '0000-00-00', 'female', 'cortes'),
(9, '', '', '', '', '0000-00-00', '', ''),
(10, 'test@gmail.com', 'test', 'test', '222', '0000-00-00', 'f', 'test'),
(11, 'test2@gmail.com', 'test', 'test', '444', '0000-00-00', 'female', 'test'),
(12, 'mjlee@njit.edu0', 'yong', 'yong', '911', '0000-00-00', 'male', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--
DROP TABLE IF EXISTS `todos000`;

CREATE TABLE `todos000` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owneremail` varchar(60) DEFAULT NULL,
  `ownerid` int(11) DEFAULT NULL,
  `createddate` datetime DEFAULT NULL,
  `duedate` datetime DEFAULT NULL,
  `message` text,
  `isdone` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos000` (`id`, `owneremail`, `ownerid`, `createddate`, `duedate`, `message`, `isdone`) VALUES
(1, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', '2017-05-03 00:00:00', 'This is test #B', 0),
(2, 'mjlee@njit.edu', 1, '2017-05-03 00:00:00', '2017-05-27 00:00:00', 'new name 2', 0),
(3, 'janedoe@njit.edu', 2, '2017-01-01 00:00:00', '2017-05-01 00:00:00', 'This is test #A', 0),
(4, 'mjlee@njit.edu', 1, '2017-05-03 00:00:00', '2017-05-26 00:00:00', 'test again', 0),
(5, 'mjlee@njit.edu', 1, '2017-05-07 00:00:00', '2017-05-28 00:00:00', '1111', 0),
(6, 'test@gmail.com', 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'HELLO', 0);


