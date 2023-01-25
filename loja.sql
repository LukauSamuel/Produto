-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25-Jan-2023 às 20:15
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `preso` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `numeroProduto` int(10) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `imagem` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `data`, `preso`, `descricao`, `quantidade`, `numeroProduto`, `categoria`, `imagem`) VALUES
(2, 'Sapato Branco', '2023-01-25 17:29:23', '4300', '', 3, 32423, ' Acessórios', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `email`, `password`, `categoria`, `status`, `data`, `telefone`) VALUES
(1, 'ismael', 'ismaellove00@hotmail.com', '$2y$10$9bm65EvtciVcU3Qps3gNCuuAm7Jg8ZLzgRKN.rnipxtyG2qBAgHv.', 'consumidor', 'ativado', '2023-01-23 22:09:29', NULL),
(2, 'bambi', 'bambi@gmail.com', '$2y$10$dlz8gzocmt648iT3jqkHmeRVUVuQPN9976Fgm6y5bq2tWms0LAlci', 'Administrador', 'ativado', '2023-01-25 11:05:49', '9230232'),
(3, 'kna', 'kinaa@gmail.com', '$2y$10$YznX0Ofo499Spcb3ZXr/jO1732CgALXW4omjTkJBXzwUbcEg4F1ma', 'Consumidor', 'ativado', '2023-01-25 11:07:46', '9230232'),
(4, 'ismael', 'ismaellve00@hotmail.com', '$2y$10$snzsYqQWbd2JaeUdmQda0OpXL4bInDsPTA0OPSoHtd18Ep5v5wJba', 'Administrador', 'ativado', '2023-01-25 11:11:11', '92302322'),
(6, 'lukau', 'lukau@gmail.com', '$2y$10$Q2m36wIA0HUHygrRBicElOdebTFGRFRPg3kIwpYvnqeUkVgO2yhrS', 'Administrador', 'ativado', '2023-01-25 17:19:19', '93302322');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
