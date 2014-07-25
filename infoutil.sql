-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2014 at 06:53 AM
-- Server version: 5.5.23
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infoutil`
--
CREATE DATABASE IF NOT EXISTS `infoutil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `infoutil`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` varchar(255) NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `password`, `estado`) VALUES
('656218221', 'rolando.a.arriaza', 'linux', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(255) NOT NULL,
  `id_login` int(11) DEFAULT NULL,
  `email` text NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pais` text,
  `facebook` text,
  `genero` varchar(20) NOT NULL,
  `nacimiento` text NOT NULL,
  `twitter` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_login`, `email`, `nombre`, `pais`, `facebook`, `genero`, `nacimiento`, `twitter`, `foto`) VALUES
('656218221', 656218221, 'rolignu90@gmail.com', 'Rolando Antonio Arriaza', 'San Salvador, El Salvador', 'https://www.facebook.com/rolando.a.arriaza', 'male', '06/18/1990', 'null', 'https://graph.facebook.com/rolando.a.arriaza/picture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
