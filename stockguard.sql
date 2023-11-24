-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 23:31
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `stockguard`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `almoxarifado`
--

CREATE TABLE `almoxarifado` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(255) DEFAULT NULL,
  `LOCAL_ARM` varchar(255) DEFAULT NULL,
  `COD_PROD` int(11) DEFAULT NULL,
  `TOTAL_PROD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `almoxarifado`
--

INSERT INTO `almoxarifado` (`ID`, `CODIGO`, `LOCAL_ARM`, `COD_PROD`, `TOTAL_PROD`) VALUES
(2, '010000', 'L21', 1462, 25),
(3, '020001', 'R66', 1463, 30),
(4, '030002', 'I68', 1464, 40),
(5, '040003', 'K05', 1465, 15),
(6, '050004', 'Y65', 1466, 20),
(7, '060005', 'K04', 1467, 35),
(8, '070006', 'Z85', 1468, 18),
(9, '080007', 'H95', 1469, 22),
(10, '090008', 'W43', 1470, 28),
(11, '100009', 'O56', 1471, 32),
(12, '110010', 'C86', 1472, 23),
(13, '120011', 'Z26', 1473, 27),
(14, '130012', 'K22', 1474, 31),
(15, '140013', 'X79', 1475, 19),
(16, '150014', 'H12', 1476, 24),
(17, '160015', 'R08', 1477, 29),
(18, '170016', 'I44', 1478, 26),
(19, '180017', 'F69', 1479, 21),
(20, '190018', 'W16', 1480, 33),
(21, '200019', 'G83', 1481, 37),
(22, '210020', 'J41', 1482, 16),
(23, '220021', 'X31', 1483, 38),
(24, '230022', 'U08', 1484, 14),
(25, '240023', 'Z76', 1485, 36),
(26, '250024', 'U70', 1486, 17),
(27, '260025', 'D58', 1487, 39),
(28, '270026', 'M73', 1488, 45),
(29, '280027', 'E63', 1489, 42),
(30, '290028', 'Q34', 1490, 48),
(31, '300029', 'T76', 1491, 50),
(32, '310030', 'O51', 1492, 47),
(33, '320031', 'W87', 1493, 41),
(34, '330032', 'S96', 1494, 46),
(35, '340033', 'R39', 1495, 49),
(36, '350034', 'Z78', 1496, 44),
(37, '360035', 'Y31', 1497, 43),
(38, '370036', 'T85', 1498, 34),
(39, '380037', 'Z42', 1499, 26),
(40, '390038', 'C30', 1500, 25),
(41, '400039', 'D86', 1501, 30),
(42, '410040', 'W71', 1502, 40),
(43, '420041', 'Y68', 1503, 15),
(44, '430042', 'N59', 1504, 20),
(45, '440043', 'J13', 1505, 35),
(46, '450044', 'M11', 1506, 18),
(47, '460045', 'B89', 1507, 22),
(48, '470046', 'I95', 1508, 28),
(49, '480047', 'U10', 1509, 32),
(50, '490048', 'C23', 1510, 23),
(51, '500049', 'W54', 1511, 27),
(52, '010000', 'D15', 1462, 25),
(53, '020001', 'G87', 1463, 30),
(54, '030002', 'P38', 1464, 40),
(55, '040003', 'C31', 1465, 15),
(56, '050004', 'G40', 1466, 20),
(57, '060005', 'F77', 1467, 35),
(58, '070006', 'H17', 1468, 18),
(59, '080007', 'Y21', 1469, 22),
(60, '090008', 'E34', 1470, 28),
(61, '100009', 'D59', 1471, 32),
(62, '110010', 'P28', 1472, 23),
(63, '120011', 'O90', 1473, 27),
(64, '130012', 'W67', 1474, 31),
(65, '140013', 'S58', 1475, 19),
(66, '150014', 'T99', 1476, 24),
(67, '160015', 'S62', 1477, 29),
(68, '170016', 'Z94', 1478, 26),
(69, '180017', 'V30', 1479, 21),
(70, '190018', 'A15', 1480, 33),
(71, '200019', 'S17', 1481, 37),
(72, '2444', 'R87', 2444, 0),
(73, '1234', 'J17', 1234, 0),
(74, '5678', 'T23', 5678, 0),
(75, '9101', 'X83', 9101, 0),
(76, '2345', 'M84', 2345, 0),
(77, '6789', 'U43', 6789, 0),
(78, '1122', 'U59', 1122, 0),
(79, '3344', 'Q33', 3344, 0),
(80, '5566', 'U97', 5566, 0),
(81, '7788', 'M51', 7788, 0),
(82, '9900', 'C87', 9900, 0),
(83, '1011', 'D02', 1011, 0),
(84, '1213', 'S43', 1213, 0),
(85, '1415', 'C10', 1415, 0),
(86, '1617', 'G89', 1617, 0),
(87, '1819', 'U20', 1819, 0),
(88, '2021', 'R75', 2021, 0),
(89, '2223', 'T53', 2223, 0),
(90, '2425', 'K34', 2425, 0),
(91, '2627', 'O70', 2627, 0),
(92, '2829', 'W23', 2829, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `CODIGO` int(11) DEFAULT NULL,
  `CNPJ_CPF` varchar(14) NOT NULL,
  `RAZAO_SOCIAL_NOME` varchar(255) NOT NULL,
  `CEP` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ID`, `CODIGO`, `CNPJ_CPF`, `RAZAO_SOCIAL_NOME`, `CEP`) VALUES
(2, NULL, '41150160000102', 'RAVA CEREAIS', '58068068');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ordens_de_producao`
--

CREATE TABLE `ordens_de_producao` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(255) DEFAULT NULL,
  `CLIENTE` varchar(255) DEFAULT NULL,
  `PRODUTO` varchar(255) DEFAULT NULL,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `LOCAL_ALMOX` varchar(255) DEFAULT NULL,
  `CEP_DESTINO` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ordens_de_producao`
--

INSERT INTO `ordens_de_producao` (`ID`, `CODIGO`, `CLIENTE`, `PRODUTO`, `QUANTIDADE`, `LOCAL_ALMOX`, `CEP_DESTINO`) VALUES
(1, 'OPC02023', 'TOTAL VAREJO', '1234', 6, 'X02', '58068068'),
(2, 'OPA02023', 'RAVA CEREAIS', '2425', 14, 'X11', '58068065'),
(3, 'OPG04022', 'CANTINA DA VERDURA', '6789', 40, 'K05', '58080123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID` int(11) NOT NULL,
  `CODIGO` int(11) DEFAULT NULL,
  `NOME` varchar(255) NOT NULL,
  `TIPO` varchar(255) DEFAULT NULL,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `LOCAL` varchar(255) DEFAULT NULL,
  `VALIDADE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ID`, `CODIGO`, `NOME`, `TIPO`, `QUANTIDADE`, `LOCAL`, `VALIDADE`) VALUES
(1, 2444, 'Yorgute Lacta', 'C', 250, 'X21', '2024-11-19'),
(2, 1234, 'Arroz branco', 'F', 12, 'X02', '2024-01-24'),
(3, 5678, 'Leite Desnatado', 'B', 150, 'Y02', '2023-12-22'),
(4, 9101, 'Iogurte Natural', 'C', 200, 'Z03', '2023-11-16'),
(5, 2345, 'Azeite de Oliva Extra Virgem', 'D', 120, 'W04', '2023-11-27'),
(6, 6789, 'Maçãs Gala', 'E', 80, 'K05', '2023-12-28'),
(7, 1122, 'Frango Desossado', 'F', 90, 'M06', '2023-08-15'),
(8, 3344, 'Pasta de Amendoim', 'G', 110, 'P07', '2023-11-06'),
(9, 5566, 'Queijo Parmesão', 'H', 130, 'Q08', '2023-11-28'),
(10, 7788, 'Salmão Fresco', 'I', 70, 'R09', '2023-11-23'),
(11, 9900, 'Ovos Orgânicos', 'J', 50, 'S10', '2023-11-21'),
(12, 1011, 'Feijão Preto', 'A', 130, 'X11', '2024-04-02'),
(13, 1213, 'Leite Integral', 'B', 180, 'Y12', '2023-11-01'),
(14, 1415, 'Iogurte de Morango', 'C', 250, 'Z13', '2024-11-18'),
(15, 1617, 'Azeite de Oliva', 'D', 90, 'W14', '2026-12-23'),
(16, 1819, 'Bananas Orgânicas', 'E', 120, 'K15', '2023-03-07'),
(17, 2021, 'Peito de Frango', 'F', 110, 'M16', '2024-01-03'),
(18, 2223, 'Macarrão Integral', 'G', 100, 'P17', '2026-06-01'),
(19, 2425, 'Queijo Gouda', 'H', 80, 'Q18', '2024-05-22'),
(20, 2627, 'Truta Defumada', 'I', 60, 'R19', '2024-09-26'),
(22, 1234, 'Pera papa', 'S', 7, 'S9', '2023-11-26'),
(23, 1124, 'Alface Verde', 'V', 12, 'T1', '2023-11-24');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `CODIGO` int(11) DEFAULT NULL,
  `NOMES` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `TELEFONE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `CODIGO`, `NOMES`, `EMAIL`, `TELEFONE`) VALUES
(7, NULL, 'admin', 'admin@gmail.com', '83987368120');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `almoxarifado`
--
ALTER TABLE `almoxarifado`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `ordens_de_producao`
--
ALTER TABLE `ordens_de_producao`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `almoxarifado`
--
ALTER TABLE `almoxarifado`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ordens_de_producao`
--
ALTER TABLE `ordens_de_producao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
