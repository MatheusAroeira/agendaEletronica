-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03/09/2024 às 02:46
-- Versão do servidor: 8.0.39
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `events`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `66d66a094ca59`
--

DROP TABLE IF EXISTS `66d66a094ca59`;
CREATE TABLE IF NOT EXISTS `66d66a094ca59` (
  `id` varchar(220) NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `66d66a094ca59`
--

INSERT INTO `66d66a094ca59` (`id`, `title`, `color`, `start`, `end`) VALUES
('', '', '', '0000-00-00', '0000-00-00'),
('66d66c0e7d21d', 'teste', '#ff0000', '2024-09-06', '2024-09-06'),
('66d66c162bacc', 'teste', '#ff0000', '2024-09-12', '2024-09-13'),
('66d66c2c65e22', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d66e2b999f3', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d6701bc7046', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d67039ecfc1', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d6708e40e0c', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d6709e4776a', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d6709fc7d37', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d670b869f8f', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d670bb7579f', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d670ddd7c66', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11'),
('66d670ec665cc', 'teste 2', '#ff0000', '2024-09-03', '2024-09-11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste1`
--

DROP TABLE IF EXISTS `teste1`;
CREATE TABLE IF NOT EXISTS `teste1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `teste1`
--

INSERT INTO `teste1` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, '', '', '0000-00-00', '0000-00-00'),
(2, '', '', '0000-00-00', '0000-00-00'),
(3, '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste2`
--

DROP TABLE IF EXISTS `teste2`;
CREATE TABLE IF NOT EXISTS `teste2` (
  `id` varchar(220) NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario de teste`
--

DROP TABLE IF EXISTS `usuario de teste`;
CREATE TABLE IF NOT EXISTS `usuario de teste` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario de teste`
--

INSERT INTO `usuario de teste` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'teste 1', '#FFD700', '2024-09-02', '2024-09-02'),
(2, 'teste 2', '#FFD700', '2024-09-04', '2024-09-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
