-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jan-2020 às 20:32
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bom jardim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE `membros` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `NomePai` varchar(30) NOT NULL,
  `NomeMae` varchar(30) NOT NULL,
  `Naturalidade` varchar(30) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Endereco` varchar(30) NOT NULL,
  `Bairro` varchar(30) NOT NULL,
  `CEP` varchar(20) NOT NULL,
  `Escolaridade` varchar(30) NOT NULL,
  `Profissao` varchar(20) NOT NULL,
  `EstadoCivil` varchar(20) NOT NULL,
  `ConjugeEvangelico` varchar(30) NOT NULL,
  `NomeConjuge` varchar(30) NOT NULL,
  `DataCasamento` date NOT NULL,
  `NumeroFilhos` int(3) NOT NULL,
  `DataNascimento` date NOT NULL,
  `DataDecisao` date NOT NULL,
  `DataBatismoAguas` date NOT NULL,
  `DataBatismoEspiritoSanto` date NOT NULL,
  `Situacao` varchar(30) NOT NULL,
  `Cargo` varchar(30) NOT NULL,
  `Observacoes` varchar(100) NOT NULL,
  `Foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `membros`
--
ALTER TABLE `membros`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `membros`
--
ALTER TABLE `membros`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
