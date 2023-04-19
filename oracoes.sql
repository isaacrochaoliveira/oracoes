-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Abr-2023 às 23:03
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oracoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `citacoes`
--

DROP TABLE IF EXISTS `citacoes`;
CREATE TABLE IF NOT EXISTS `citacoes` (
  `id_citacao` tinyint NOT NULL AUTO_INCREMENT,
  `nome_sabio` varchar(100) NOT NULL DEFAULT 'Desconhecido',
  `texto_sabio` text,
  `citacoes_curtidas` int DEFAULT '0',
  `citacoes_comentarios` int DEFAULT '0',
  PRIMARY KEY (`id_citacao`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `citacoes`
--

INSERT INTO `citacoes` (`id_citacao`, `nome_sabio`, `texto_sabio`, `citacoes_curtidas`, `citacoes_comentarios`) VALUES
(1, 'Dalai Lama', '\"Só existem dois dias no ano que nada pode ser feito. Um se chama ontem e o outro se chama amanhã, portanto hoje é o dia certo para amar, acreditar, fazer e principalmente viver.\"', 0, 0),
(2, 'Dalai Lama', '\"O período de maior ganho em conhecimento e experiência é o período mais difícil da vida de alguém.\"', 0, 0),
(3, 'Dalai Lama', '\"Se o seu coração é absoluto e sincero, você naturalmente se sente satisfeito e confiante, não tem nenhuma razão para sentir medo dos outros.\"', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) DEFAULT 'sem-foto.webp',
  `nome` varchar(100) NOT NULL,
  `bio` text,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(70) NOT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `DDD` tinyint DEFAULT '55',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `foto`, `nome`, `bio`, `email`, `senha`, `whatsapp`, `DDD`) VALUES
(1, 'sem-foto.webp', 'Isaac', 'Olá. Eu me chamo Isaac e estou aqui para fazer meus pedimos de oração', 'isaak.rocha137@gmail.com', '1234567', '62996567587', 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
