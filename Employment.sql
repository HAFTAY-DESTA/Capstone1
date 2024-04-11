-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2012 at 06:22 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database:`Employment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employer`
--

CREATE TABLE IF NOT EXISTS Employer(
id int(60) NOT NULL AUTO_INCREMENT,
name varchar(200) not null,
password varchar(200) not null,
role varchar(200) not null,
phone bigint(20) not null,
job varchar(200) not null,
gender varchar(20) not null,
education varchar(200),
workplace varchar(200) not null,
amount int(10) not null,
salary varchar(200) not null,
PRIMARY KEY (id),
UNIQUE (password)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--Table structure for table `Employee`
--

CREATE TABLE IF NOT EXISTS Employee(
id int(60) NOT NULL AUTO_INCREMENT,
name varchar(200) not null,
password varchar(200) not null,
role varchar(200) not null,
phone bigint(20) not null,
gender varchar(20) not null,
job varchar(200) not null,
education varchar(200),
attachment varchar(200),
workplace varchar(200) not null,
PRIMARY KEY (id),
UNIQUE (password)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS users (
id int(60) NOT NULL AUTO_INCREMENT,
username varchar(200) not null,
password varchar(200) not null,
role varchar(200) not null,
PRIMARY KEY (id),
UNIQUE (password)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `users`
INSERT INTO `users` (`username`, `password`, `role`) VALUES 
('Haftay', 'd3s7a', 'admin');

-- --------------------------------------------------------

--Table structure for table `jobasign`
--

CREATE TABLE IF NOT EXISTS jobasign( 
  id int(60) NOT NULL AUTO_INCREMENT, 
  employer varchar(200), 
  ephone int(20),
  worker varchar(200), 
  wphone int(20) , 
  gender varchar(20),
  job varchar(200),  
  education varchar(200),
  workplace varchar(200),
  status varchar(200) not null DEFAULT 'ይፀበዩ !!!',
  PRIMARY KEY (id)
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
      

--

