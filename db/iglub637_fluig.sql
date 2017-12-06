-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2017 às 03:04
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iglub637_fluig`
--
CREATE DATABASE IF NOT EXISTS `iglub637_fluig` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `iglub637_fluig`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscritos`
--

CREATE TABLE `inscritos` (
  `INS_CODIGO` int(11) NOT NULL,
  `INS_NOME` varchar(100) CHARACTER SET utf8 NOT NULL,
  `INS_EMAIL` varchar(100) CHARACTER SET utf8 NOT NULL,
  `INS_IP` varchar(50) CHARACTER SET utf8 NOT NULL,
  `INS_DATA` datetime NOT NULL,
  `INS_EMPRESA` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INS_SEGMENTO` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `INS_TPPESSOA` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inscritos`
--
ALTER TABLE `inscritos`
  ADD PRIMARY KEY (`INS_CODIGO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inscritos`
--
ALTER TABLE `inscritos`
  MODIFY `INS_CODIGO` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
