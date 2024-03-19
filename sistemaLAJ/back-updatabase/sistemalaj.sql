-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/08/2023 às 07:55
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemalaj`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `Solicitante` varchar(255) NOT NULL,
  `Mesas` int(255) NOT NULL,
  `Cadeiras` int(255) NOT NULL,
  `Datas` varchar(255) NOT NULL,
  `Data/Evento` varchar(255) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Entregue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`id`, `Solicitante`, `Mesas`, `Cadeiras`, `Datas`, `Data/Evento`, `Endereco`, `Entregue`) VALUES
(1, ' Filipe', 12, 4, '27/08/23', '29/08/2023', 'Rua barra de são miguel', 'Aguardando'),
(3, ' Pedro Rodrigues', 12, 12, '27/08/23', '29/08/2023', 'Rua barra de são miguel', 'Entregue');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Cargo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `login`, `Senha`, `Cargo`) VALUES
(1, 'admin', 'admin123', 0),
(2, 'Filipe', 'filipe123', 0),
(3, 'pedro', '123', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
