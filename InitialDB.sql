--
-- Database: `yz746`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--
USE `sas238`;-- put your database name in the single quotes

DROP TABLE IF EXISTS `accounts000`;

CREATE TABLE  `accounts000` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `college` varchar(20) DEFAULT NULL,
  `major` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts000` (`id`, `email`, `password`, `fname`, `lname`, `college`, `major`) VALUES
(1, 'mjlee@njit.edu', '1234', 'Mike', 'Lee', 'NJIT', 'IT'),
(2, 'janedoe@njit.edu', '1234', 'John', 'Doe', 'NJIT', 'CS'),
(3, 'ml4q73@njit.edu', 'password', 'Michael', 'Lee', 'NJIT', 'IT'),
(4, 'ml24q73@njit.edu', '123321', 'Maisha', 'Manir', 'Stevens University', 'Mathematics'),
(5, 'ml241q73@njit.edu', 'kansas', 'Rempee', 'Kalia', 'NJIT', 'IT'),
(6, 'js829', 'cutiepatootie', 'Nadia', 'Jlelaty', 'Rutgers', 'Environmental Polices'),
(7, 'test@njit.edu', '911CALLME', 'yong', 'zhao', 'NJIT', 'Pre-Law'),
(8, 'Rebecca@gmail.com', 'cortes', 'Rebecca', 'Cortes', 'Temple', 'IT'),
(9, 'sas222@gmail.com', 'toocool1', 'Kim', 'Prince', 'NJIT', 'STS'),
(10, 'test@gmail.com', 'test', 'test', 'name', 'NJIT', 'Theatre'),
(11, 'test2@gmail.com', 'movies4life', 'Peter', 'Avila', 'SVA', 'Film'),
(12, 'mjlee@njit.edu0', 'yong1', 'Shilpi', 'Patel', NULL, 'Business');

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


