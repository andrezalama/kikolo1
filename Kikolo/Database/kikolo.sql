-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19-Mar-2017 às 13:07
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kikolo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anunciante`
--

CREATE TABLE `anunciante` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localizacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datacriacao` datetime NOT NULL,
  `tempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_anuncio`
--

CREATE TABLE `categoria_anuncio` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kikolo`
--

CREATE TABLE `kikolo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localizacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomeusuario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipoanuncio` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `negociavel` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `kikolo`
--

INSERT INTO `kikolo` (`id`, `titulo`, `categoria`, `Descricao`, `localizacao`, `nomeusuario`, `email`, `telefone`, `data`, `path`, `tipoanuncio`, `negociavel`, `preco`) VALUES
(11, 'aluga-se', 'vivenda T4', 'a bom preço', 'luanda', 'cacem zalama', 'zalamaa@ekfkff.com', '22492242', '2016-09-02 15:17:20', 'kikolo.png', NULL, NULL, 0),
(12, 'Vendo', 'Automovel', 'a bom preco', 'angola-benguela', 'andre zalama', 'dskdks@kkfk.com', '944833', '2016-09-02 15:20:01', 'pedroooo (2).jpg', NULL, NULL, 0),
(13, 'vender', 'ojosfosj', 'osposfjspojp', 'jsoopfojspoj', 'tercio', 'sjdojifs@jfsfij.com', '322424', '2016-09-02 17:13:44', 'rav4.jpg', NULL, NULL, 0),
(14, 'arrenda-se', 'vivenda T5', 'vsihgfhdiuf', 'luanda', 'daniel', 'fijfjf@kkff.com', '3244232', '2016-09-02 17:18:48', 'spark.jpg', NULL, NULL, 0),
(15, 'Troca-se', 'Motorizada', 'fsoiddhio', 'launda', 'zalama12', 'kdfdidf@pdpd.com', '232422', '2016-09-02 17:20:50', 'mota3.jpg', NULL, NULL, 0),
(16, 'Troca-se', 'Calçados', 'em boas condiçoes', 'benguela', 'pedro zalama', 'papapap@mfmfmf.com', '23242', '2016-09-02 17:23:48', 'sapato1.jpg', NULL, NULL, 0),
(17, 'vende-se', 'Automovel', 'xdfgdgfdg', 'wrrwww', 'sffdffd', 'kdoihgig@kffmgf', '2422242', '2016-09-02 17:25:02', 'i20.jpg', NULL, NULL, 0),
(18, 'Vendo', 'Automovel', 'ssfssfss', 'sfssss', 'tepmo zalama', 'isdihgso@odgjdgdj', '343535', '2016-09-02 17:27:02', 'picanto.jpg', NULL, NULL, 0),
(19, 'Vender', 'Terreno', 'vendo meu terreno 20*20 no benfica', 'angola', 'estefania', 'zalama@gmai.com', '2225222', '2016-09-02 19:33:31', '19201_en_1.jpg', NULL, NULL, 0),
(21, 'Vendo', 'Mecanica', 'sdfsdsdfsd', 'angola', 'daniel zalama', 'pedrozalama1991@gmail.com', '44244', '2016-09-03 20:51:02', 'motormota1.jpg', NULL, NULL, 0),
(22, 'Vendo telefone', 'Telemovel', 'a bom preço\r\niphone5s novo', 'cazenga', 'Tercio zalama', 'tempo@hotmail.com', '242422', '2016-09-03 20:57:10', 'iphone5.jpg', NULL, NULL, 0),
(24, 'vende-see', 'automovel', 'www', 'luanda', 'zalama', 'pedroza@gmail.com', '3224242', '2016-10-13 14:22:10', 'swift.jpg', NULL, NULL, 0),
(25, 'alugo', 'automovel', 'dwww', 'angola', 'sffssf', 'zalama@hotmail.com.pt', '24224224', '2016-10-13 14:25:35', 'panameraS.jpg', NULL, NULL, 0),
(26, 'Sapatos venda', 'Calçado', 'dsgdfddfgddfgfd', 'bengo', 'daniele zalama', 'danielzalama@hotmailcom', '24242242', '2016-10-17 23:14:51', 'sapato5.jpg', NULL, NULL, 0),
(27, 'pwpeo', 'categoria_Sim', 'snsdisd', 'iiiehehoi', 'oifwfw', 'jvnvd@efnife', '453543', '2016-10-18 14:50:37', 'i10.jpg', NULL, NULL, 0),
(28, 'lslsls', 'categoria_Sim', 'dusgidihushsu', 'angola', 'lueji', 'isjsjjs@vidvidn.com', '242242', '2016-10-18 20:25:07', 'swift.jpg', NULL, NULL, 0),
(29, 'paio', 'Ligeiro', 'ewbdkuwdiwb', 'benguela', 'zalamapedro', 'graca@gmail.com', '311414441', '2016-10-20 16:17:48', 'elantra.JPG', 'Privado', '1', 3322321);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_anuncio`
--

CREATE TABLE `tipo_anuncio` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'zalama', 'zalama', 'pedrozalama@hotmail.com', 'pedrozalama@hotmail.com', 1, '6rvndz5feb4sg4wgs48g8wk0kskwoc4', '$2y$13$xMbXAKOEN3UcmPUr6X7bQeNAYXEVi8OiheekuzMOxNVbc3flCsvNW', '2016-09-01 15:03:56', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'pedro', 'pedro', 'andre@hotmai.com', 'andre@hotmai.com', 1, 'j33q6x2ek48ck8ss0go0g484ooo0448', '$2y$13$7pqhditKDjEvQeUPMoh6w.yupQFf4ajbE5rS1egyQfDSQf.sobOjG', '2016-10-25 15:37:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'daniel', 'daniel', 'daniel@gmail.com', 'daniel@gmail.com', 1, '2rzuqn7fdqck8kgs44sksw0ss4ckw08', '$2y$13$zojQobGvjfWOK9wnujXLlujalFt7zJZZsNw.PmLq/RoApKjr6UZCe', '2016-10-25 16:37:31', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunciante`
--
ALTER TABLE `anunciante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_DB2DC2E3E7927C74` (`email`);

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria_anuncio`
--
ALTER TABLE `categoria_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kikolo`
--
ALTER TABLE `kikolo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FC3AEF7BE7927C74` (`email`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunciante`
--
ALTER TABLE `anunciante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria_anuncio`
--
ALTER TABLE `categoria_anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kikolo`
--
ALTER TABLE `kikolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
