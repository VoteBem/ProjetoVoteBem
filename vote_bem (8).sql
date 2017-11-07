-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2017 às 00:58
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote_bem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_candidatos`
--

CREATE TABLE `tb_candidatos` (
  `id_candidato` int(6) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `numero_candidato` int(6) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `id_partido` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_candidatos`
--

INSERT INTO `tb_candidatos` (`id_candidato`, `nome`, `foto`, `numero_candidato`, `cargo`, `cidade`, `estado`, `data_nascimento`, `id_partido`) VALUES
(4, 'Stati', '', 45, ';-;', 'Curitiba', 'Paraná', '1970-10-11', 1),
(5, 'Stati', '', 45, 'Deus', 'Curitiba', 'Paraná', '1970-10-11', 2),
(6, 'Batata', '59f79f3ea6585.jpg', 312, 'senador', 'Londrina', 'PR', '0000-00-00', 1),
(7, 'Batata', '59f7a061be5ce.jpg', 3213, 'tt', 'Curitiba', 'PR', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id_evento` int(6) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `imagem` varchar(60) DEFAULT NULL,
  `descricao` varchar(120) NOT NULL,
  `ingresso` float NOT NULL,
  `data` varchar(40) NOT NULL,
  `horario` varchar(10) NOT NULL,
  `local` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`id_evento`, `nome`, `imagem`, `descricao`, `ingresso`, `data`, `horario`, `local`) VALUES
(3, 'Evento 1', NULL, 'nada', 20, '2017-10-09', '16:00', 'Não sei'),
(4, 'Evento 2', NULL, 'nada', 30, '2017-10-12', '16:00', 'Não sei'),
(7, 'Evento 5', '59fc890d0d0eb.png', 'desc', 20, '11/11/2017', '16:20', 'local ae');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_forum`
--

CREATE TABLE `tb_forum` (
  `id_comentario` int(6) NOT NULL,
  `topico_discussao` varchar(60) NOT NULL,
  `comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_noticias`
--

CREATE TABLE `tb_noticias` (
  `id_noticia` int(6) NOT NULL,
  `titulo_noticia` varchar(80) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `texto` text NOT NULL,
  `resumo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_noticias`
--

INSERT INTO `tb_noticias` (`id_noticia`, `titulo_noticia`, `imagem`, `texto`, `resumo`) VALUES
(1, 'Noticia', 'batata', 'txt1', 'resumo da noticia 1'),
(2, 'Noticia 22', 'batata', 'txt2', 'resumo da noticia 2'),
(3, 'Noticia 3', '', 'txt3', 'resumo da noticia 3'),
(4, 'Noticia 4', '', 'txt4', 'resumo da noticia 4'),
(15, 'Noticia 1', '59efd20aa8d80.', 'noticia', 'resumo da noticia 1'),
(16, 'noticia', '59f6321021871.png', 'sei la', 'resumo'),
(17, 'noticia', '59f632835dd80.png', 'sei la', 'resumo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_partidos`
--

CREATE TABLE `tb_partidos` (
  `id_partido` int(6) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `sigla` varchar(6) NOT NULL,
  `ano_fundacao` varchar(15) NOT NULL,
  `ideais` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_partidos`
--

INSERT INTO `tb_partidos` (`id_partido`, `nome`, `imagem`, `sigla`, `ano_fundacao`, `ideais`) VALUES
(1, 'Partido Nï¿½o Sei', '', 'PNS', '18/90/1007', 'Nada'),
(2, 'Pedro', '', 'spd', '01/01/0100', 'nada'),
(3, 'partido teste', '59f634495d8bd.png', 'PT', '10/10/1010', 'um ideal ae'),
(4, 'partido testÃ£o', '59f638e8d5ed3.png', 'pT', '23/09/1967', 'nenhum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_quiz`
--

CREATE TABLE `tb_quiz` (
  `id_questao` int(3) NOT NULL,
  `pergunta` varchar(100) NOT NULL,
  `resposta1` varchar(60) NOT NULL,
  `resposta2` varchar(60) NOT NULL,
  `resposta3` varchar(60) NOT NULL,
  `resposta4` varchar(60) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_quiz`
--

INSERT INTO `tb_quiz` (`id_questao`, `pergunta`, `resposta1`, `resposta2`, `resposta3`, `resposta4`, `img`) VALUES
(1, 'quanto e 2+2?', '1', '2', '3', '4', ''),
(2, 'o que significa HTML?', 'nada', 'Hyper Text Language Markup', 'Java Script', 'Cascade StyleSheet', ''),
(3, 'Qual foi o primeiro presidente do Brasil?', 'deodoro da fonseca', 'floriano peixoto', 'serginho da guitarra', 'pedro cardozo', ''),
(4, 'o que significa malakoi?', 'nada', 'nada', 'nada', 'garoto ixpertinho', '5a0246cc41c24.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(6) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `data_nascimento` varchar(10) NOT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `email`, `senha`, `data_nascimento`, `sexo`) VALUES
(1, 'Guilherme Mota', 'motag928@gmail.com', 'gui123', '16/04/2001', 'masculino'),
(2, 'PedrÃ£o', 'paulosafety@hotmail.com', '123', '16/04/2001', 'masculino'),
(3, 'Mateus Andreatta', 'mateus-henrique2001@hotmail.com', 'senha123', '05/03/2001', 'masculino'),
(4, 'Natanael CustÃ³dio', 'natanael.custodio@gmail.com', '123', '01/10/2001', 'masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_candidatos`
--
ALTER TABLE `tb_candidatos`
  ADD PRIMARY KEY (`id_candidato`),
  ADD KEY `fk_partido` (`id_partido`);

--
-- Indexes for table `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indexes for table `tb_forum`
--
ALTER TABLE `tb_forum`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indexes for table `tb_noticias`
--
ALTER TABLE `tb_noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indexes for table `tb_partidos`
--
ALTER TABLE `tb_partidos`
  ADD PRIMARY KEY (`id_partido`);

--
-- Indexes for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  ADD PRIMARY KEY (`id_questao`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_candidatos`
--
ALTER TABLE `tb_candidatos`
  MODIFY `id_candidato` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id_evento` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_forum`
--
ALTER TABLE `tb_forum`
  MODIFY `id_comentario` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_noticias`
--
ALTER TABLE `tb_noticias`
  MODIFY `id_noticia` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_partidos`
--
ALTER TABLE `tb_partidos`
  MODIFY `id_partido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  MODIFY `id_questao` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_candidatos`
--
ALTER TABLE `tb_candidatos`
  ADD CONSTRAINT `fk_partido` FOREIGN KEY (`id_partido`) REFERENCES `tb_partidos` (`id_partido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
