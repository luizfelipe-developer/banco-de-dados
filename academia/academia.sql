-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2023 at 07:38 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usuario`, `senha`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `nome`, `caminho`) VALUES
(56, 'as', 'RobloxScreenShot20230627_165824596.png'),
(57, 'ss', 'RobloxScreenShot20230627_165824596.png'),
(58, 'as', 'RobloxScreenShot20230627_165824596.png'),
(59, '41', 'RobloxScreenShot20230627_165824596.png'),
(60, '53', 'RobloxScreenShot20230627_165824596.png'),
(61, 'aaa', 'RobloxScreenShot20230627_165824596.png');

-- --------------------------------------------------------

--
-- Table structure for table `matricula_aluno`
--

CREATE TABLE `matricula_aluno` (
  `cod_aluno` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `CPF` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `cod_professor` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matricula_aluno`
--

INSERT INTO `matricula_aluno` (`cod_aluno`, `nome`, `sobrenome`, `endereco`, `CPF`, `telefone`, `genero`, `cod_professor`) VALUES
(999, 'alo', 'alo', 'alo', '128.419.028-40', '(79) 87898-9479', 'masculino', '1');

-- --------------------------------------------------------

--
-- Table structure for table `matricula_professor`
--

CREATE TABLE `matricula_professor` (
  `cod_professor` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `CPF` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `cref` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matricula_professor`
--

INSERT INTO `matricula_professor` (`cod_professor`, `nome`, `sobrenome`, `endereco`, `CPF`, `telefone`, `genero`, `cref`) VALUES
(0, 'tes', 'y', 'uio', '412.412.412-41', '(87) 47198-0421', 'masculino', '42'),
(1, 'felipe', 'guimaraes', 'alo', '874.981.728-97', '(67) 66498-7198', 'masculino', 'alo'),
(2, 'ij', 'ji', 'ji', '124.124.124-12', '(84) 89124-1241', 'masculino', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `cod_aluno` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `segunda` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarta` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quinta` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexta` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matricula_aluno`
--
ALTER TABLE `matricula_aluno`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- Indexes for table `matricula_professor`
--
ALTER TABLE `matricula_professor`
  ADD PRIMARY KEY (`cod_professor`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`cod_aluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
