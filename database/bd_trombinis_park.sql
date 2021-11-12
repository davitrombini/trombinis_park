-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2021 às 14:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_trombinis_park`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `img`, `views`) VALUES
(2, 'Teste', 'testetagsajhdgasljkdhalskjd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(3, 'teste2', 'dajshdjlkashldjahsdiujash', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(4, 'teste3', 'ashgdjhagdj,khagdhjasg', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(5, 'teste4', 'ajkshfdkjashdjashhdjagasl', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(6, 'teste5', 'iokfjsadhjasjkhdkjlahdjkalsh', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(7, 'teste6', 'sdlkndakjshdjkashskjdlhaliajsd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(8, 'teste7', 'jhfdkjlashdkjlawhdjkhasljhkd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(9, 'teste8', 'ahsjgdhjasghdjkahsdjkhas', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(10, 'Teste 9', '1asdasdasd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'teste', 'teste@email.com', '$2y$10$MRU7kNVU9HYbCxhBZzJC6uVlfz1EKU.iv7S5RSY4A1xcLwOWOCptm', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
