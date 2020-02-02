-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2020 às 20:23
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_de_usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `CODIGO` int(30) NOT NULL,
  `TIPO_DE_PESSOA` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `NOME` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `NOME_FANTASIA` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CPF` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CNPJ` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `RAZAO_SOCIAL` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ENDERECO` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `NUMERO` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `COMPLEMENTO` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CEP` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MUNICIPIO` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CIDADE` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `EMAIL` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `TELEFONE` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CELULAR` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `CLIENTE` tinyint(1) DEFAULT NULL,
  `FORNECEDOR` tinyint(1) DEFAULT NULL,
  `FUNCIONARIO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`CODIGO`, `TIPO_DE_PESSOA`, `NOME`, `NOME_FANTASIA`, `CPF`, `CNPJ`, `RAZAO_SOCIAL`, `ENDERECO`, `NUMERO`, `COMPLEMENTO`, `CEP`, `MUNICIPIO`, `CIDADE`, `EMAIL`, `TELEFONE`, `CELULAR`, `CLIENTE`, `FORNECEDOR`, `FUNCIONARIO`) VALUES
(1, '2', 'EXEMPLO1', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(2, '2', 'EXEMPLO2', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(3, '2', 'EXEMPLO3', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(4, '2', 'EXEMPLO4', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(5, '2', 'EXEMPLO5', '', '123.454.687-97', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 0, 0),
(6, '2', 'EXEMPLO6', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(7, '2', 'EXEMPLO7', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(8, '2', 'EXEMPLO8', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 1, 1, 1),
(9, '2', 'EXEMPLO9', '', '123.456.789-10', '', '', 'Rua Aimoré', '', '', '26564-400', 'Jacutinga', 'Mesquita', '', '', '', 0, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`CODIGO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `CODIGO` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213261;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
