-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Ago-2020 às 00:57
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcontrole`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontrole`
--

CREATE TABLE `tbcontrole` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcontrole`
--

INSERT INTO `tbcontrole` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'fdsf', 'fdsf@hgmail.com', '$argon2id$v=19$m=65536,t=4,p=1$R3p2TEZwUUNQOUhxNHJCaQ$YgqGY4M8n2FUoNG6qWsmIt3P0WjNewPO6UwBlm3au24'),
(2, 'luc', 'luc@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SWt6amRtWkdGZm9yLjRXMw$nRB5xk9cO9Jq3+jmay7Sx7tcbB6/PU+3eZWCqbORfzs'),
(3, 'Yasmin', 'yasmin@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$RWpkMm91N1c3TzY3Tk1wYg$N7lKVRVISoDt/if27WFQIaPxYUa3SpgzpQG4QWyL0Yc'),
(4, 'dfgdfg', 'dsfds@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Z0FWMzB0OXZ4QlBpNTlORw$lePYW+XBY9trddeUUDCRSp0dJ12FRO/Rbiw9QsSJqB0'),
(5, 'gfhfgh', 'hgfh@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$YlNCZG5TUGx0bjFPQmN1Qg$cpCuKU5aqJtTuQSftZjB6KE8uVxBF/gkDoKGmOWe5Sk'),
(6, 'gfhfgh', 'hggfh@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$d2owNmRiOXE2SkJBMDVJLg$8UNdT3MQj2lFQmFUXZ2D8vJZ4D2WdMn8DhRuiwPwxlY'),
(7, 'gfhfgh', 'hggfhgh@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SWdWMlY1WUMzZklLMVlIZA$Sn37MuKPABr8lI9DPsy5ie4BLdcZSxOpDxz7yZca0ow');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgastos`
--

CREATE TABLE `tbgastos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` double DEFAULT NULL,
  `quantidade` int(100) NOT NULL,
  `valorTotal` double NOT NULL,
  `dtSalv` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbgastos`
--

INSERT INTO `tbgastos` (`id`, `descricao`, `valor`, `quantidade`, `valorTotal`, `dtSalv`, `id_usuario`) VALUES
(6, 'Pão Sei la', 4.54, 54, 245.16, '2020-07-30', 3),
(9, 'Chocolate', 2.5, 3, 7.5, '2020-08-04', 2),
(11, 'Queijo', 15, 2, 30, '2020-08-14', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcontrole`
--
ALTER TABLE `tbcontrole`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tbgastos`
--
ALTER TABLE `tbgastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcontrole`
--
ALTER TABLE `tbcontrole`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbgastos`
--
ALTER TABLE `tbgastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbgastos`
--
ALTER TABLE `tbgastos`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_usuario`) REFERENCES `tbcontrole` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
