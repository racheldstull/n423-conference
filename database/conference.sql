-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 08:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n423`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `firstName`, `lastName`, `description`, `title`, `img`) VALUES
(1, 'Mae', 'Jemison', 'Mae C. Jemison is a leader in deep space exploration and is the current principal of the 100 Year Starship &mdash; a project with the goal of sending future astronauts out of the Solar System within 100 years. Jemison aims to increase public interest in future deep space exploration projects.\r\n\r\nJemison is also the first African-American female astronaut. In 1992, she flew into space aboard the Endeavour, becoming the first African-American woman in space.', 'Doctor, Astronaut, Scientist', 'mae-jemison.jpg'),
(2, 'Elon', 'Musk', 'South African entrepreneur Elon Musk is known for founding Tesla Motors and SpaceX, which launched a landmark commercial spacecraft in 2012. CEO of SpaceX which is the only privately owned space exploration organization and is rapidly growing.', 'Entrepreneur, Investor, Engineer', 'elon-musk.jpg'),
(3, 'Scott', 'Kelly', 'A veteran of four space flights, Kelly commanded the International Space Station (ISS) on three expeditions and was a member of the yearlong mission to the ISS. In October 2015, he set the record for the total accumulated number of days spent in space, the single longest space mission by an American astronaut.', 'Engineer, Astronaut, United States Navy Captain', 'scott-kelly.jpg'),
(4, 'Sunita', 'Williams', 'She formerly held the records for total spacewalks by a woman (seven) and most spacewalk time for a woman (50 hours, 40 minutes). Williams was assigned to the International Space Station as a member of Expedition 14 and Expedition 15. In 2012, she served as a flight engineer on Expedition 32 and then commander of Expedition 33.\r\n\r\nShe is currently an active selectee for commercial flights to be deployed.', 'Astronaut, United States Navy Captain', 'sunita-williams.jpg'),
(5, 'Soyeon', 'Yi', 'Yi Soyeon is the first Korean to fly to space. She spent nine days carrying out experiments and medical tests on the International Space Station in 2008.', 'Astronaut, Biotechnologist', 'yi-soyeon.jpg'),
(6, 'Gennady', 'Padalka', 'Padalka has spent 879 days in space, more than any other person in the world. He worked on both Mir and the International Space Station.\r\n\r\nPadalka is a recipient of the Hero Star of the Russian Federation and the title of Russian Federation Test-Cosmonaut. He is a prize winner of the Russian Federation Government in the field of science and technology.', 'Russian Air Force Officer, RKA Cosmonaut', 'gennady-padalka.jpg'),
(7, 'Neil Degrasse', 'Tyson', 'One of America''s best-known scientists, astrophysicist Neil deGrasse Tyson has spent much of his career sharing his knowledge with others. He has a great talent for presenting complex concepts in a clear and accessible manner. Although he is a cosmologist and astrophysicist, but he is incredibly popular among space enthusiasts which also gives him an equivalent edge. Some would say, he''s the successor or Carl Sagan.', 'Astrophysicist, Author, Science Communicator', 'neil-degrasse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
