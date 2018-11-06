-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2018 às 19:01
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendency`
--

CREATE TABLE `pendency` (
  `code` int(11) NOT NULL,
  `situation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `students` int(11) NOT NULL,
  `vacancy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `school`
--

CREATE TABLE `school` (
  `code` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `complement` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `school`
--

INSERT INTO `school` (`code`, `name`, `password`, `cep`, `address`, `number`, `complement`, `district`, `city`, `state`, `phone1`, `phone2`) VALUES
(159662, 'Escola Estadual Aurelio Luiz da Costa', '123', '38040-070', 'Rua Miguel Stefani', 1, '', 'Jardim Induberaba', 'Uberaba', 'MG', ' (034) 3336-1291', ''),
(159735, 'Escola Estadual America', '123456', '38025-110', 'Rua da ConstituiÃ§Ã£o', 1405, '', 'Nossa Senhora da Abadia', 'Uberaba', 'MG', '(034) 3312-2991', ''),
(159751, 'Escola Estadual Minas Gerais', '123', '38010-280', 'PraÃ§a Frei EugÃªnio', 473, '', 'Centro', 'Uberaba', 'MG', ' (034) 3332-3212', ''),
(159786, 'Escola Estadual Bernardo Vasconcelos', '123', '38035-420', 'PraÃ§a JosÃ© Tiveron', 50, '', 'Conjunto Costa Telles I', 'Uberaba', 'MG', '(034) 3313-1707', ''),
(160164, 'Escola Estadual IrmÃ£o Afonso', '123', '38082-258', 'Rua JosÃ© Carlos Rodrigues da Cunha JÃºnior', 160, '', 'Jardim Elza AmuÃ­ I', 'Uberaba', 'MG', '03433229197', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `code` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `grade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastyear` text COLLATE utf8_unicode_ci NOT NULL,
  `guardianUser` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`code`, `name`, `birth`, `grade`, `education`, `lastyear`, `guardianUser`) VALUES
(8, 'Maicon Bernades Junior', '2008-09-09', '2nd grade', 'Elementary School', 'Classified', '34567890123'),
(9, 'Shayla Stheffany da Silva Cassiano de Assis', '2009-07-03', '3rd grade', 'Elementary School', 'Disapproved', '34567890123'),
(10, 'Walter Rodrigues Maia', '2007-06-14', '6th grade', 'Middle School', 'Approved', '34567890123'),
(12, 'Felipe Silva', '1999-01-01', '8th grade', 'Middle School', 'Disapproved', '34567890123'),
(13, 'Amora Marques ', '2004-02-20', '9th grade', 'Middle School', 'Approved', '13643880'),
(14, 'Robbie Stark', '2003-07-09', '1st grade', 'High School', 'Approved', '34567890123'),
(15, 'Marcos Vinicius Andre Sousa', '2004-09-07', '9th grade ', 'Middle School', 'Approved', '13643880'),
(16, 'Maiara Beatriz Sousa', '2006-09-07', '7th grade ', 'Middle School', 'Approved', '13643880');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `cep` int(10) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `complement` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`cpf`, `name`, `password`, `birth`, `cep`, `address`, `number`, `complement`, `district`, `city`, `state`, `phone1`, `phone2`) VALUES
('13643880', 'Alice marques', 'aaa', '1993-02-07', 38082047, 'Rua Domingos Licursi', 47, '', 'SÃ£o JosÃ©', 'Uberaba', 'MG', '34991102936', '3499088567'),
('34567890123', 'Mario Palmeiros', '123', '1967-07-09', 67120438, 'Rua Rio D\'ouro', 2312, 'casa', 'Quarenta Horas (Coqueiro)', 'Ananindeua', 'PA', '(34) 3333-4444', '(34) 9188-7002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacancies`
--

CREATE TABLE `vacancies` (
  `code` int(11) NOT NULL,
  `education` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `vacancies`
--

INSERT INTO `vacancies` (`code`, `education`, `grade`, `quantity`, `school`) VALUES
(1, 'High School', '1st grade', 8, 159751),
(2, 'Middle School', '6th grade', 6, 159751),
(5, 'High School', '3rd grade', 8, 160164),
(8, 'High School', '2nd grade', 3, 160164),
(10, 'High School', '1st grade', 3, 160164),
(11, 'Middle School', '7th grade', 2, 160164),
(12, 'Middle School', '8th grade', 32, 160164),
(13, 'Middle School', '6th grade', 3, 160164);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendency`
--
ALTER TABLE `pendency`
  ADD PRIMARY KEY (`code`),
  ADD KEY `students` (`students`),
  ADD KEY `vacancy` (`vacancy`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`code`),
  ADD KEY `guardianUser` (`guardianUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`code`),
  ADD KEY `school` (`school`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendency`
--
ALTER TABLE `pendency`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pendency`
--
ALTER TABLE `pendency`
  ADD CONSTRAINT `students` FOREIGN KEY (`students`) REFERENCES `students` (`code`),
  ADD CONSTRAINT `vacancy` FOREIGN KEY (`vacancy`) REFERENCES `vacancies` (`code`);

--
-- Limitadores para a tabela `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `guardianUser` FOREIGN KEY (`guardianUser`) REFERENCES `user` (`cpf`);

--
-- Limitadores para a tabela `vacancies`
--
ALTER TABLE `vacancies`
  ADD CONSTRAINT `school` FOREIGN KEY (`school`) REFERENCES `school` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
