-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2021 às 21:34
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

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
(2, 'Parque do Mickey', 'O Parque do Mickey é muito interativo e possui diversas atividades como o Pluto inflável, escalada com escorregador, joão bobo do Pateta, parede vazada e pula-pula. Dimensões: 5,00(C) x 4,50(L) x 2,30(A)m, Peso: 95Kg, Capacidade: 3 usuários.', 'https://lh3.googleusercontent.com/pw/AM-JKLXHLgEb-2Cr9ITzSEa3701h4tLx0cDV64pDrIGJgdnUU_7yhAvj8OmPJG9HaiRsjea1TaSw05dO1iynehQFiEo3yqU0nFibMnb3qjGImhpZ7ayzL8P9odkczTugyDxJhJJI3WpoMPqqCZSkWDkB6RDomQ=w876-h657-no', 4),
(3, 'Piscina de Bolinhas do Mickey', 'A piscina de Bolinhas Inflável Mickey, da Play Park, é confeccionada em Master Lona Play (fio 1000), o que a deixa ainda mais leve e resistente, se comparada a outros brinquedos da sua linhagem. Acompanha 500 bolinhas e motor compatível ao brinquedo.', 'https://lh3.googleusercontent.com/pw/AM-JKLWYem8OkKxsdeMnCyCMRWKg0k83dgwD1FkFnroGxg__jSVo55a8ABlNrwyDT0OvsSabKUI14PYpviZZI3ty9-G53WCwgMbozJdTrxgAiFkCLLN_Qc6gQC4uL9_7pheLf_gGWkdd6HpiAIpqos3EHcJQ9w=w876-h657-no', 5),
(4, 'Cama Elástica', 'Suporta até 95 kg, sua lona é super resistente, pode ser desmontada, possui tubos redondos reforçados com sistema de encaixe macho fêmea, dispensando o uso de qualquer ferramenta para sua montagem. Ideal para buffets, condomínios, clubes, etc.', 'https://lh3.googleusercontent.com/pw/AM-JKLWKIAhLFiz22bmhN-MsU8nOiTyAGEQbm-lUatM9fnQUTjdeVVa_pgOSAatud7d-k832LNfTx7ElmKlVp6NC1tZJfRUKAj460Bc_JXURYFax3_wUMvsYpVpP_HqrWXCBdnXU4gnG0ieMgCc8tc9NNzZ9kA=w876-h657-no', 4),
(5, 'Piscina de Bolinhas', 'Sua estrutura recebe revestimento de espuma, tornando o brinquedo mais seguro. A estrutura metálica é galvanizada, dando maior vida útil ao brinquedo. Dimensões: 1,50(C) x 1,50(L) x 1,98(A)m, Peso: 96Kg, Capacidade: 3 usuários.', 'https://lh3.googleusercontent.com/pw/AM-JKLWpCfcEYJtIXq_ZLKRuXcd6_-haHPjsvvduvDl1MnXaIyaDYmclAQT_ar6oKZXRPVkn3Ozuqpw7pP2nR-Y4-0cBqbEeR_KMefHGOFM7-c6wcAuTZQrvNhOfn_SGrOMSBVIADvnuHUWlHsIGxlE44SWdAg=w876-h657-no', 3),
(6, 'Tobogã Hiper', 'É um escorregador 100% inflável. Possui escada frontal com parede para separar da área do escorregador. O telhado em forma de capela proporciona total segurança, evitando que as crianças pulem ou desçam do brinquedo. Dimensões: 6,50(C) x 3,50(L) x 5,00(A)', 'https://lh3.googleusercontent.com/pw/AM-JKLWQUBQrrr5QtUgVnIOiSakQ0WsECCUQx_aLoBEYZdpJ2E3xHTbAinZpWm1KLE71W2NmaFqulO_bV2Un5whn-615WIEwjgvz00-kF9qcx_Z0KpjIhPUL2s1AQ9cd7GzJOSq5ltwqgPVtVW-nLxb0PF0RNQ=w876-h657-no', 2),
(7, 'Combo 3 em 1 Dino', 'Equipado com três atividades: Pula-Pula + Piscina de Bolinhas + Parede de Escalada com escorrega, é um dos novos lançamentos da Play Park. Aprendizado e diversão, juntos em um só brinquedo! Dimensões: 5,40(C) x 3,60(L) x 3,20(A)m Capacidade: 3 usuários', 'https://lh3.googleusercontent.com/pw/AM-JKLWOGwJ3B0p_E3-c4Po9opUbiCFLcuLQiot0N-EfJguH6S2XCfJOpHElWElPU_8839MTIYn9uRMsyQXZ7AaIud8NLcZ8_ydicvYQv5uqs3rw4vofDiapWFco-HIlpFjEK-PYmM-h-A7DdbRdkIhKDP-aWA=w876-h657-no?authuser=0', 4),
(8, 'Área Kids', 'Ideal para espaço baby em buffets e escolas, pois auxilia na coordenação motora das crianças, proporcionando uma diversão com total segurança. Idade sugerida: a partir de 1 ano.', 'https://lh3.googleusercontent.com/pw/AM-JKLXN_tr9h5hlU1KkcGJo7_8hSCAvze-Tg5FmerQ5vgWy6XI-aVQoBB_0YsxOOgdWuca6hNMtbCLA4wwyWU9o5FDFagW_jXRvz3sldjWJQVhB_90IlrTZQKEmCWDcQKZKN5-PRiTD-bE_aMaoLqxgkLj8eA=w876-h657-no?authuser=0', 1),
(9, 'Tobogã Super', 'É um escorregador 100% inflável. Possui escada frontal com parede para separar da área do escorregador. O telhado em forma de capela proporciona total segurança, evitando que as crianças pulem ou desçam do brinquedo. Dimensões: 5,00(C) x 2,80(L) x 3,70(A)', 'https://lh3.googleusercontent.com/pw/AM-JKLVmDF6kmtRWAK5euTSYFpx2MPeR83s89mefoxwP84yOSOQgLcCUeiDe2Yx0VUBF2u66KQRpTmsFN6OU1T9Oz8X0Mpiv2WUjfCm82vM6H6WZ-AAcworxxmJpCLXUopTuUBbkdkudpfAls-AZdMY_r1VYLw=w876-h657-no?authuser=0', 4),
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
