-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 13:06
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
-- Banco de dados: `quickfood`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `imagem`, `categoria`) VALUES
(1, 'Sushi', 'Sushi 8 unid', '18.50', './fotos/Sushi.jpg', 'oriental'),
(2, 'Ramen', 'Porção Ramen', '30.90', './fotos/Ramen.jpg', 'oriental'),
(3, 'Dim Sum', 'Dim Sum 4 unid', '25.90', './fotos/DimSum.jpg', 'oriental'),
(4, 'Pad Thai', 'Porção Pad Thai', '35.50', './fotos/PadThai.jpg', 'oriental'),
(5, 'Gyoza', 'Gyoza 6 unid', '29.90', './fotos/Gyoza.jpg', 'oriental'),
(6, 'Bibimbap', 'Porção Bibimbap', '40.50', './fotos/Bibimbap.jpg', 'oriental'),
(7, 'Pho', 'Porção Pho', '35.50', './fotos/Pho.jpg', 'oriental'),
(8, 'Tempura', 'Porção Tempura', '25.50', './fotos/Tempura.jpg', 'oriental'),
(9, 'Biryani', 'Porção de Biryani', '39.90', './fotos/Biryani.jpg', 'oriental'),
(13, 'Hainanese Chicken Rice', 'Porção Hainanese Chicken Rice', '35.00', './fotos/HainaneseChickenRice.jpg', 'oriental'),
(14, 'Spring Rolls ', 'Spring Rolls 4 uni', '25.90', './fotos/SpringRolls.jpg', 'orienal'),
(15, 'Kung Pao Chicken', 'Porção Kung Pao Chicken', '45.00', './fotos/KungPaoChicken.jpg', 'oriental'),
(16, 'Temaki', 'Temaki Salmão unid', '24.00', './fotos/temaki.jpg', 'oriental'),
(17, 'X-salada', 'Burger,queijo,bacon,alface e tomate.', '25.00', './fotos/x-salada.jpg', 'lanchonete'),
(18, 'X-Burguer', 'Burger duplo e cheddar.', '19.99', './fotos/x-burger.jpg', 'lanchonete'),
(19, 'X-Burgão', 'Big burger,bacon,cheddar,alface e tomate.', '30.00', './fotos/X-burgão.jpg', 'lanchonete'),
(20, 'Burguer³', 'Triplo burger,bacon,cebola caramelizada,queijo e alface.', '35.00', './fotos/burguer³.jpg', 'lanchonete'),
(21, 'Baguncinha', 'Burger,bacon,ovo,barbecue, cheddar, alface e tomate.', '25.00', './fotos/baguncinha.jpg', 'lanchonete'),
(22, 'AgroBurguer', 'bacon,cebola caramelizada,cheddar e manjericão.', '29.99', './fotos/agroburguer.jpg', 'lanchonete'),
(23, 'Americano', 'Cheddar,cebola roxa,picles,tomate,repolho e molho especial.', '35.99', './fotos/americano.jpg', 'lanchonete'),
(24, 'Frita', 'Batatinha Frita', '15.00', './fotos/batata.jpg', 'lanchonete'),
(25, 'Rústica', 'Batata Rústica.', '20.00', './fotos/rustica.jpg', 'lanchonete'),
(26, 'Onions rings', 'Cebola recheada com queijo.', '25.99', './fotos/onions.jpg', 'lanchonete'),
(27, 'Mandioquinha', 'Mandioquinha Frita.', '20.99', './fotos/mandioquinha.jpg', 'lanchonete'),
(32, 'Gorgonzola', 'Queijo Artesanal 200g.', '25.28', './fotos/gorgonzolaa.jpg', 'emporio'),
(33, 'Parmigiano-Reggiano', 'Queijo artesanal 200g.', '76.90', 'fotos/Parmigiano-Reggiano.jpg', 'emporio'),
(34, 'Brie', 'Queijo Artesanal 150g.', '19.90', './fotos/Brie.jpg', 'emporio'),
(35, 'Gouda', 'Queijo Artesanal 200g.', '22.00', './fotos/Gouda.jpg', 'emporio'),
(36, 'Oliva monovarietal', 'Azeite de oliva extra virgem monovarietal.', '78.95', './fotos/livamonovarietal.jpg', 'emporio'),
(37, 'Oliva de Frantoio.', 'Azeite de oliva extra virgem de Frantoio.', '94.99', './fotos/Frantoio.jpg', 'emporio'),
(38, 'Compota de maçã ', 'Compota de maçã 240g.', '75.99', './fotos/Compotademaçã.jpg', 'emporio'),
(39, 'Chutney de manga ', 'Chutney de manga 210g.', '40.50', 'fotos/Chutneydemanga.jpg', 'emporio'),
(40, 'Compota de pera ', 'Compota de pera com canela 200g.', '54.00', './fotos/Compotadeperacomespeciarias.jpg', 'emporio'),
(41, 'Vinho Branco Seco José Piteira 750ml.', 'Vinho Branco Seco José Piteira 750ml.', '106.70', './fotos/vinhobranco.jpg', 'emporio'),
(42, 'Vinho Tinto Seco ', 'Vinho Tinto Seco Delas Syrah 750ml.', '125.90', 'fotos/vinhotinto.jpg', 'emporio'),
(43, 'Tequila Don Julio ', 'Tequila Don Julio 750ml.', '553.83', 'fotos/Tequiladonjulio.jpg', 'emporio'),
(44, 'Dadinho', 'Dadinho de tapioca 10 unid.', '25.90', './fotos/dadinho.jpg', 'lanchonete'),
(45, 'Quinoa ', 'Quinoa 200g.', '9.90', './fotos/quinoa.jpg', 'naturais'),
(46, 'Trigo Sarraceno', 'trigo sarraceno 300g.', '10.28', './fotos/trigosarraceno.jpg', 'naturais'),
(47, 'Amêndoas ', 'Amêndoas 150g.', '15.90', './fotos/Amêndoas.jpg', 'naturais'),
(48, 'Castanha de caju', 'Castanha de caju 500g.', '40.70', './fotos/castanhasdecaju.jpg', 'naturais'),
(49, 'Nozes ', 'Nozes 150g.', '30.90', './fotos/nozes.jpg', 'naturais'),
(50, 'Pistache 200g.', 'Pistache 200g.', '50.99', './fotos/pistache.jpg', 'naturais'),
(51, 'Mel ', 'Mel natural 150ml.', '29.99', './fotos/mel.jpg', 'naturais'),
(52, 'Xarope de bordo', 'Xarope de bordo 250ml.', '62.90', './fotos/xaropedebordo.jpg', 'naturais'),
(53, 'Açúcar de coco', 'Açúcar de coco 100g.', '10.79', './fotos/açúcardecoco.jpg', 'naturais'),
(54, 'Mix de frutas secas ', 'Mix de frutas secas 500g.', '49.50', './fotos/frutassecas,.jpg', 'naturais'),
(55, 'Chips de vegetais', 'Chips de vegetais 200g.', '35.90', './fotos/chipsdevegetais.jpg', 'naturais'),
(56, 'Tâmara Seca ', 'Tâmara Seca 200g.', '25.83', './fotos/tamara.jpg', 'naturais'),
(57, 'Margherita ', 'Margherita com rúcula grande.', '56.90', 'fotos/Margheritacomrúcula.jpg', 'pizza'),
(58, 'Quatro estações', 'Quatro estações grande.', '52.20', './fotos/estações.jpg', 'pizza'),
(59, 'Portuguesa ', 'Portuguesa grande.', '45.90', './fotos/portuga.jpg', 'pizza'),
(60, 'Frango com Catupiry ', 'Frango com Catupiry grande.', '42.70', './fotos/fango.jpg', 'pizza'),
(61, 'Calabresa ', 'Calabresa grande.', '40.90', './fotos/Calabresa.jpg', 'pizza'),
(62, 'Quatro Queijos', 'Quatro Queijos grande.', '50.00', 'fotos/QuatroQueijos.jpg', 'pizza'),
(63, 'Pepperoni', 'Pepperoni grande.', '39.83', './fotos/Pepperoni.jpg', 'pizza'),
(64, 'Banana com caramelo ', 'Banana com caramelo grande.', '40.50', './fotos/Pizzadebananacomcaramelo.jpg', 'pizza'),
(65, 'Nutella e Morango ', 'Nutella e Morango grande.', '40.99', './fotos/Nutellaemorango.jpg', 'pizza'),
(66, 'Banana com Nutella ', 'Banana com Nutella grande.', '45.00', './fotos/Bananaenutella.jpg', 'pizza'),
(67, 'Brigadeiro ', 'Brigadeiro grande.', '40.00', './fotos/brigadeiro.jpg', 'pizza'),
(68, 'Ouro Branco com Nutella', 'Ouro Branco grande.', '49.90', './fotos/ourobranco.jpg', 'pizza'),
(69, 'Baunilha', 'Pote Baunilha 1.5L', '20.90', './fotos/Baunilha.jpg', 'sorvete'),
(70, 'Chocolate ', 'Pote Chocolate 1.5L', '20.90', './fotos/Chocolate.jpg', 'sorvete'),
(71, 'Morango', 'Pote Morango 1.5L', '20.90', './fotos/Morango.jpg', 'sorvete'),
(72, 'Creme', 'Pote Creme 1.5L', '19.50', './fotos/Creme.jpg', 'sorvete'),
(74, 'Pote Doce de Leite 1.5L', 'Pote Doce de Leite 1.5L', '25.50', './fotos/docedeleite.jpg', 'sorvete'),
(75, 'Pistache', 'Pote Pistache 500ml', '40.50', './fotos/sorvetePistache.jpg', 'sorvete'),
(76, 'Cookies and Cream ', 'Pote Cookies and Cream 1.5L', '30.99', './fotos/CookiesandCream.jpg', 'sorvete'),
(77, 'Limão', 'Pote Limão 1.5L', '25.83', './fotos/Limão.jpg', 'sorvete'),
(78, 'Café', 'Pote Café 1L', '25.50', './fotos/Café.jpg', 'sorvete'),
(79, 'Menta com Chocolate', 'Pote Menta com Chocolate 500ml', '30.00', './fotos/MentacomChocolate.jpg', 'sorvete'),
(80, 'Banana Split ', 'Banana Split porção', '40.00', './fotos/BananaSplit.jpg', 'sorvete'),
(81, 'Abacaxi', 'Pote Abacaxi 1L', '29.90', './fotos/Frutasabacaxi.jpg', 'sorvete'),
(82, 'Mojito', 'Rum,hortelã,suco de limão,açúcar e água com gás', '25.90', './fotos/Mojito.jpg', 'bar'),
(83, 'Margarita', 'Tequila,suco de limão e licor de laranja', '25.90', 'fotos/Margarita.jpg', 'bar'),
(84, 'Piña Colada', 'Rum,suco de abacaxi,leite de coco e gelo', '29.90', './fotos/PiñaColada.jpg', 'bar'),
(85, 'Cosmopolitan', 'Vodka,suco de cranberry,licor de laranja e suco de limão', '30.90', './fotos/Cosmopolitan.jpg', 'bar'),
(86, 'Whisky', 'Whisky Johnnie Walker 1L Black Label', '179.90', './fotos/Whisky.jpg', 'bar'),
(87, 'Gin', 'Gin Tanqueray 750 ml', '169.00', './fotos/gin.jpg', 'bar'),
(88, 'Suco Laranja ', 'Suco Laranja 250ml', '15.00', './fotos/sucolaranja.jpg', 'bar'),
(89, 'Suco Morango', 'Suco Morango 250ml', '15.90', './fotos/morangosuco.jpg', 'bar'),
(90, 'Suco Manga', 'Suco Manga 250ml', '20.50', './fotos/maracuja.jpg', 'bar'),
(91, 'Suco framboesa', 'Suco framboesa 250ml', '25.50', './fotos/Sucoframboesa.jpg', 'bar'),
(92, 'Suco blueberry', 'Suco blueberry 250ml', '35.00', './fotos/Sucoblueberry.jpg', 'bar'),
(93, 'Suco Caju', 'Suco Caju 250ml', '25.90', './fotos/caju.jpg', 'bar'),
(94, 'Combo de Frutas', 'Combo de Frutas 15 porções', '20.90', './fotos/frutas.jpg', 'frut'),
(95, 'Combo Legumes 12 uni', 'Combo Legumes 12 uni', '25.90', './fotos/legumes.jpg', 'frut'),
(96, 'Legumes Picados', 'Combo legumes picados 8uni', '25.50', './fotos/legumespicados.jpg', 'frut'),
(97, 'Frutas frescas', 'Frutas frescas 7 porções', '15.90', '\r\n./fotos/bandeja-de-frutas.avif', 'frut'),
(98, 'Combo especiarias', 'Combo temperos naturais 5 uni', '20.90', './fotos/especiarias-e-ervas_1339-199.avif', 'frut'),
(99, 'Grãos Naturais', 'Combo Grãos Naturais 6 uni', '19.50', './fotos/variedade-de-legumes-e-feijoes.avif', 'frut'),
(100, 'Salda e Tempero ', 'Combo Salda e Tempero 5uni', '30.00', 'fotos/verduras-frescas-.avif', 'frut'),
(101, 'Folhas', 'Combo Folhas 10 uni', '45.90', 'fotos/folhas.jpg', 'frut'),
(102, 'Kit Lancheira Integral', 'Arroz integral, batata, salmão grelhado e mix de folhas', '69.90', '\r\n./fotos/salmão.jpg', 'frut'),
(103, 'Kit Lancheira Integral', 'Lancheira de frango, bulgur, microgreens, tomate e frutas', '55.50', './fotos/lancheira-de-frango-bulgur-microgreens-.avif\r\n', 'frut'),
(104, 'Lancheira Infantil', 'Combo infaltil café e pré almoço saudável', '35.00', './fotos/infaltil.jpg', 'frut'),
(105, 'Lancheira Infantil', 'Lancheira combo frutas naturais', '25.90', './fotos/lancheirafrut.jpg', 'frut');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `idade` int(11) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `idade`, `uf`, `cidade`, `endereco`, `cep`, `senha`, `permissao`) VALUES
(4, 'Lívia', 'proencaaniceto@gmail.com', '18996326762', 16, 'Am', 'Serra do Navio', 'wertjkl', 'erghjk;', '590fa63cc4f986ed5334e7a60eecc577', 'usuario');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
