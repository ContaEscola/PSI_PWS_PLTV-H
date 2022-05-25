-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2022 às 15:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faturacaodb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL,
  `designacaosocial` varchar(35) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(35) NOT NULL,
  `nif` varchar(35) NOT NULL,
  `morada` varchar(37) NOT NULL,
  `codigoPostal` int(11) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `capitalsocial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturas`
--

CREATE TABLE `faturas` (
  `idfatura` int(11) NOT NULL,
  `data` date NOT NULL,
  `valortotal` double NOT NULL,
  `ivatotal` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `referenciafuncionario` int(11) NOT NULL,
  `referenciacliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ivas`
--

CREATE TABLE `ivas` (
  `idiva` int(11) NOT NULL,
  `percentagem` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `emvigor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linhafaturas`
--

CREATE TABLE `linhafaturas` (
  `idlinhaf` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorunitario` int(11) NOT NULL,
  `valoriva` int(11) NOT NULL,
  `referenciafatura` int(11) NOT NULL,
  `referenciaproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `referencia` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `preco` double NOT NULL,
  `sotck` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` int(11) NOT NULL,
  `nif` int(9) NOT NULL,
  `morada` varchar(35) NOT NULL,
  `codigopostal` varchar(38) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`);

--
-- Índices para tabela `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`idfatura`);

--
-- Índices para tabela `ivas`
--
ALTER TABLE `ivas`
  ADD PRIMARY KEY (`idiva`);

--
-- Índices para tabela `linhafaturas`
--
ALTER TABLE `linhafaturas`
  ADD PRIMARY KEY (`idlinhaf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `faturas`
--
ALTER TABLE `faturas`
  MODIFY `idfatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ivas`
--
ALTER TABLE `ivas`
  MODIFY `idiva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `linhafaturas`
--
ALTER TABLE `linhafaturas`
  MODIFY `idlinhaf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
