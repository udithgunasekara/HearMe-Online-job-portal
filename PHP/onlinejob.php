-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_vacancy`
--

CREATE TABLE `company_vacancy` (
  `jobtitle` varchar(20) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `contact` int(11) NOT NULL,
  `companymail` varchar(50) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_vacancy`
--

INSERT INTO `company_vacancy` (`jobtitle`, `companyname`, `salary`, `location`, `deadline`, `contact`, `companymail`, `description`) VALUES
('Software Engineer', 'ABC Technologies', 100000, 'San Francisco', '2023-07-15', 1234567890, 'info@abctech.com', 'We are seeking a skilled software engineer to join our team and develop cutting-edge software solutions.'),
('Marketing Specialist', 'XYZ Inc.', 60000, 'New York City', '2023-08-01', 2147483647, 'info@xyzinc.com', 'We are looking for a talented marketing specialist to create and execute marketing campaigns to drive customer engagement.'),
('Graphic Designer', 'Design Studio', 80000, 'Los Angeles', '2023-07-31', 2147483647, 'info@designstudio.com', 'We are seeking a creative graphic designer to produce engaging and visually appealing designs for various marketing materials.'),
('Project Manager', 'Acme Corporation', 120000, 'Chicago', '2023-08-15', 2147483647, 'info@acmecorp.com', 'We are hiring an experienced project manager to oversee and successfully deliver projects within scope, budget, and timeline.'),
('Data Analyst', 'Tech Solutions Ltd.', 75000, 'Seattle', '2023-07-30', 1112223333, 'info@techsolutions.com', 'We are seeking a data analyst to analyze and interpret complex data sets, providing valuable insights for business decision-making.'),
('Software Engineer', 'ABC Technologies', 100000, 'San Francisco', '2023-07-15', 34567890, 'info@abctech.com', 'We are seeking a skilled software engineer to join our team and develop cutting-edge software solutions.'),
('Marketing Specialist', 'XYZ Inc.', 60000, 'New York City', '2023-08-01', 76543210, 'info@xyzinc.com', 'We are looking for a talented marketing specialist to create and execute marketing campaigns to drive customer engagement.'),
('Graphic Designer', 'Design Studio', 80000, 'Los Angeles', '2023-07-31', 1234567, 'info@designstudio.com', 'We are seeking a creative graphic designer to produce engaging and visually appealing designs for various marketing materials.'),
('Project Manager', 'Acme Corporation', 120000, 'Chicago', '2023-08-15', 8887777, 'info@acmecorp.com', 'We are hiring an experienced project manager to oversee and successfully deliver projects within scope, budget, and timeline.'),
('Data Analyst', 'Tech Solutions Ltd.', 75000, 'Seattle', '2023-07-30', 2223333, 'info@techsolutions.com', 'We are seeking a data analyst to analyze and interpret complex data sets, providing valuable insights for business decision-making.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
