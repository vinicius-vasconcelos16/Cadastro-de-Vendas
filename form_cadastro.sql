-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2023 às 07:30
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `form_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `tipo_do_pagamento` varchar(255) NOT NULL,
  `data_pag` varchar(255) NOT NULL,
  `Item` varchar(255) NOT NULL,
  `Quantidade` int(255) NOT NULL,
  `Valor` int(255) NOT NULL,
  `Observações` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`id`, `tipo_do_pagamento`, `data_pag`, `Item`, `Quantidade`, `Valor`, `Observações`) VALUES
(61, 'Cartão', '14/04/23', 'HD', 10, 235, 'Validação'),
(65, 'Cartão', '15/04/23', 'Xícara', 8, 288, 'Vai Pagar Depois'),
(66, 'Dinheiro', '16/04/23', 'Porta-Copo', 10, 235, 'Vai mandar o Pix'),
(67, 'Pix', '23/04/23', 'Cafeteira', 1, 350, 'Pagou á vista'),
(68, 'Cartão', '15/04/23', 'Xícara', 8, 288, 'Vai Pagar Depois'),
(69, 'Cartão', '12/04/2023', 'Porta-Copo', 2, 50, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
