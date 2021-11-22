-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2021 às 19:29
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

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
-- Estrutura da tabela `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `product_id`) VALUES
(21, 2, 13),
(29, 1, 21),
(30, 1, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `server_img` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `img`, `server_img`, `views`) VALUES
(14, 'Dino 3 em 1', 'Esse é o principal motivo dos dinossauros fascinarem tanto os pequenos. E é também o principal motivo pelo qual também é um grande sucesso! Equipado com: Pula-Pula + Piscina de Bolinhas + Parede de Escalada com escorrega. Aprendizado e diversão!', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0000.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0000.jpg', 2),
(16, 'Pula-Pula Castelinho', ' As crianças se encantam com esse brinquedo em formato de castelo, multicolorido e imprescindível em qualquer festa. ', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0004.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0004.jpg', 1),
(17, 'Escorregador Croco', ' Uma opção diferente de tobogã é o Crocogã, que possui uma forma divertida de crocodilo e tematizado que deixa o brinquedo ainda mais atraente. Sucesso desde o seu lançamento é diversão garantida pra garotada.', 'http://localhost/trombinis_park/img/products/IMG-20211120-WA0052.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211120-WA0052.jpg', 2),
(19, 'Piscina de Bolinhas do Mickey', ' Mickey Mouse é um dos personagens mais populares do mundo e fará um grande sucesso em sua festa/evento! Esse desenho animado se tornou o símbolo da Companhia Walt Disney, a partir de 1928, tornando-se uma das figuras mais conhecidas da cultura Pop. ', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0012.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0012.jpg', 1),
(20, 'Área Baby', ' Área baby com gangorras, tapetes E.V.A e escorregador', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0007.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0007.jpg', 1),
(21, 'Cama Elástica 2,5 metros', ' Divirta-se muito com esta cama elástica que pode ser usada por pessoas de qualquer idade. Ela suporta até 95 kg, ideal para buffets, condomínios, clubes, residências, hotéis, eventos em geral, etc.', 'http://localhost/trombinis_park/img/products/IMG-20211120-WA0047.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211120-WA0047.jpg', 2),
(22, 'Pula-Pula Aventura do Mickey', ' Um dos personagens mais queridos da Disney chegou para fazer a diversão da garotada. O Pula Pula Aventura Mickey é um brinquedo inflável temático muito seguro e resistente. Saia na frente de sua concorrência e seja referencia em diversão com um produto d', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0006.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0006.jpg', 2),
(24, 'Parque do Mickey', 'Mickey e seus amigos trazem todo encanto e magia neste brinquedo que é pura diversão. Com acabamento em impressão digital a garotada irá se sentir dentro do desenho animado. O Parque do Mickey é muito interativo e possui diversas atividades como o Pluto i', 'http://localhost/trombinis_park/img/products/IMG-20211118-WA0008.jpg', 'C:/xampp/htdocs/trombinis_park/img/products/IMG-20211118-WA0008.jpg', 0);

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
(1, 'teste', 'teste@email.com', '$2y$10$MRU7kNVU9HYbCxhBZzJC6uVlfz1EKU.iv7S5RSY4A1xcLwOWOCptm', 1),
(2, 'a', '1@a.com', '$2y$10$ikHyzUQVhsO4JEDFoLcxcuFdGPzI0WIHzeOwoUcdncoOfVgPuHpA2', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
