-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2019 às 16:34
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eldora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_user`
--

CREATE TABLE `dados_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `usuario` varchar(45) CHARACTER SET big5 NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados_user`
--

INSERT INTO `dados_user` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'herick@ex.com', 'Herick Raposo', 'herick', 'herick'),
(2, 'marly@test', 'Marly', 'marly', 'marly'),
(3, 'teste@gmail.com', 'teste', 'teste', 'teste123456'),
(4, 'ademirraposo30@gmail.com', 'Ademir', 'ademir', 'ademir2019'),
(5, 'caike', 'caikeburgos@gmail.com', 'caike', 'caike2019'),
(6, 'HerickRaposo', 'herickraposo97@hotmail.com', 'herickraposo', 'herickraposo'),
(7, 'kauesiqueira', 'kauesiqueira@t.com', 'kaue', '123'),
(8, 'joana', 'joanadark@gmail.com', 'dark', 'joana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dados_user`
--
ALTER TABLE `dados_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dados_user`
--
ALTER TABLE `dados_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
