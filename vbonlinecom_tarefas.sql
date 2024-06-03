-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/06/2024 às 01:37
-- Versão do servidor: 8.0.37
-- Versão do PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vbonlinecom_tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcontatos`
--

CREATE TABLE `tbcontatos` (
  `idcontato` int NOT NULL,
  `nomecontato` varchar(200) NOT NULL,
  `emailcontato` varchar(100) NOT NULL,
  `telefonecontato` varchar(50) NOT NULL,
  `sexocontato` char(1) NOT NULL,
  `datanascicontato` date NOT NULL,
  `falgfavoritocontato` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tbcontatos`
--

INSERT INTO `tbcontatos` (`idcontato`, `nomecontato`, `emailcontato`, `telefonecontato`, `sexocontato`, `datanascicontato`, `falgfavoritocontato`) VALUES
(1, 'lauricio', 'lau@gmail.com', '2989849782784', 'm', '2000-02-01', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  ADD PRIMARY KEY (`idcontato`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontatos`
--
ALTER TABLE `tbcontatos`
  MODIFY `idcontato` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
