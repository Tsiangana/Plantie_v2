-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2023 às 22:44
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cultitchowa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Tomate', 'Tomates são produtos cultivados na nossa terra, fáceis de plantar, parra planta-los apenas é necessário seguir os passos a seguir:', 'tomate-no-pote.png'),
(2, 'MIlho', 'Um milho bem fresco acabado de sair do campo, venha aprender a cultiva-lo', 'Figura-Milho-PNG.png'),
(3, 'Trigo', 'O trigo é um alimeto muito usado em Agola', 'milho.png'),
(4, 'madioca', 'alimeto', 'Jinguba1.png'),
(5, 'Mandioca', 'Mandioca são produtos plantados na nossa terra, e são fáceis de plantar, para plantar é necessário seguir passos como: Para começar, faça covas de 25 cm de largura e de 5 a 10 cm de profundidade.  Plante o caule com 2,5 cm de comprimento. Se você plantar mandioca em pé, terá um rendimento maior,  porém a colheita será mais trabalhosa. Já se você plantar na horizontal, as raízes ficarão mais superficiais,  facilitando a retirada.', 'mandioca.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `user_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Altino', 'admin01@gmail.com', '12345', 'admin'),
(2, 'eliseu zau', 'pedrozau250@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3, 'Alto', 'alto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(4, 'mateus', 'mateus@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
