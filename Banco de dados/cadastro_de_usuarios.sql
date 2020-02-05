-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Fev-2020 às 02:22
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
(1, 'PF', 'EXEMPLO PF', '', '123.456.789-10', '', '', 'AVENIDA MARECHAL FLORIANO 1', '', '', '20080-900', 'CENTRO', 'RIO DE JANEIRO', '', '', '', 0, 1, 0),
(2, 'PJ', '', 'TOTAL CONTROL SHOP', '', '04753171000142', 'TOTAL CONTROL INFORMATICA EIRELI', 'RUA LEANDRO MARTINS', '00047', '', '20.080-070', 'CENTRO', 'RIO DE JANEIRO', 'FINANCEIRO@TOTALCONTROL.COM.BR', '(21) 3232-3737', '', 1, 1, 0);

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
  MODIFY `CODIGO` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213269;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
