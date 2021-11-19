-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Nov-2021 às 01:52
-- Versão do servidor: 10.6.4-MariaDB
-- versão do PHP: 7.3.21

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

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `img`, `views`) VALUES
(2, 'Cama Elástica', 'Suporta até 95 kg, sua lona é super resistente, pode ser desmontada, possui tubos redondos reforçados com sistema de encaixe macho fêmea, dispensando o uso de qualquer ferramenta para sua montagem. Ideal para buffets, condomínios, clubes, residências, etc', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 2),
(3, 'teste2', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'https://sc01.alicdn.com/kf/H5cbfa1c21df74b43aa8bb8836b7ab79bg/231189820/H5cbfa1c21df74b43aa8bb8836b7ab79bg.png', 3),
(4, 'teste3', 'ashgdjhagdj,khagdhjasg', 'https://horadacrianca.com.br/wp-content/uploads/2020/01/fut-bola-capa.png', 2),
(5, 'teste4', 'ajkshfdkjashdjashhdjagasl', 'https://d33wubrfki0l68.cloudfront.net/621ad344034c9c6f9562f69320d29624f7b1a421/84756/media/image/pulapula5.png', 1),
(6, 'teste5', 'iokfjsadhjasjkhdkjlahdjkalsh', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 1),
(7, 'teste6', 'sdlkndakjshdjkashskjdlhaliajsd', 'https://opiniaobomvaleapena.com.br/imagens/piscina-de-bolinhas-1-50m.png', 1),
(8, 'teste7', 'jhfdkjlashdkjlawhdjkhasljhkd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(9, 'teste8', 'ahsjgdhjasghdjkahsdjkhas', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0),
(10, 'Teste 9', '1asdasdasd', 'http://pngimg.com/uploads/trampoline/trampoline_PNG32.png', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'teste', 'teste@email.com', '$2y$10$MRU7kNVU9HYbCxhBZzJC6uVlfz1EKU.iv7S5RSY4A1xcLwOWOCptm', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
