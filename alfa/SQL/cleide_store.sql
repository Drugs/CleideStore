-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2021 às 00:59
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cleide_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id_post` int(11) NOT NULL,
  `titulo_post` varchar(250) NOT NULL,
  `conteudo_post` text NOT NULL,
  `data_post` date NOT NULL,
  `autor_post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id_post`, `titulo_post`, `conteudo_post`, `data_post`, `autor_post`) VALUES
(1, 'tia creide', 'tia creide', '0000-00-00', 'tia creide'),
(2, 'Sample blog post', 'This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected. This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. Blockquotes This is an example blockquote in action: Quoted text goes here. This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. Example lists This is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list: First list item Second list item with a longer description Third list item to close it out And this is an ordered list: First list item Second list item with a longer description Third list item to close it out And this is a definiton list: HyperText Markup Language (HTML) The language used to describe and define the content of a Web page Cascading Style Sheets (CSS) Used to describe the appearance of Web content JavaScript (JS) The programming language used to build advanced Web sites and applications Inline HTML elements HTML defines a long list of available inline tags, a complete list of which can be found on the Mozilla Developer Network. To bold text, use &lt;strong&gt;. To italicize text, use &lt;em&gt;. Abbreviations, like HTML should use &lt;abbr&gt;, with an optional title attribute for the full phrase. Citations, like — Mark Otto, should use &lt;cite&gt;. Deleted text should use &lt;del&gt; and inserted text should use &lt;ins&gt;. Superscript text uses &lt;sup&gt; and subscript text uses &lt;sub&gt;. Most of these elements are styled by browsers with few modifications on our part.', '2021-09-01', 'Madruga'),
(3, 'Titulo post ', '&lt;h2 class=&quot;blog-post-title&quot;&gt;Sample blog post&lt;/h2&gt; &lt;p class=&quot;blog-post-meta&quot;&gt;January 1, 2021 by &lt;a href=&quot;#&quot;&gt;Mark&lt;/a&gt;&lt;/p&gt; &lt;p&gt;This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.&lt;/p&gt; &lt;hr&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h2&gt;Blockquotes&lt;/h2&gt; &lt;p&gt;This is an example blockquote in action:&lt;/p&gt; &lt;blockquote class=&quot;blockquote&quot;&gt; &lt;p&gt;Quoted text goes here.&lt;/p&gt; &lt;/blockquote&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h3&gt;Example lists&lt;/h3&gt; &lt;p&gt;This is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;First list item&lt;/li&gt; &lt;li&gt;Second list item with a longer description&lt;/li&gt; &lt;li&gt;Third list item to close it out&lt;/li&gt; &lt;/ul&gt; &lt;p&gt;And this is an ordered list:&lt;/p&gt; &lt;ol&gt; &lt;li&gt;First list item&lt;/li&gt; &lt;li&gt;Second list item with a longer description&lt;/li&gt; &lt;li&gt;Third list item to close it out&lt;/li&gt; &lt;/ol&gt; &lt;p&gt;And this is a definiton list:&lt;/p&gt; &lt;dl&gt; &lt;dt&gt;HyperText Markup Language (HTML)&lt;/dt&gt; &lt;dd&gt;The language used to describe and define the content of a Web page&lt;/dd&gt; &lt;dt&gt;Cascading Style Sheets (CSS)&lt;/dt&gt; &lt;dd&gt;Used to describe the appearance of Web content&lt;/dd&gt; &lt;dt&gt;JavaScript (JS)&lt;/dt&gt; &lt;dd&gt;The programming language used to build advanced Web sites and applications&lt;/dd&gt; &lt;/dl&gt; &lt;h2&gt;Inline HTML elements&lt;/h2&gt; &lt;p&gt;HTML defines a long list of available inline tags, a complete list of which can be found on the &lt;a href=&quot;https://developer.mozilla.org/en-US/docs/Web/HTML/Element&quot;&gt;Mozilla Developer Network&lt;/a&gt;.&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;strong&gt;To bold text&lt;/strong&gt;, use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;strong&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;&lt;em&gt;To italicize text&lt;/em&gt;, use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;em&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;Abbreviations, like &lt;abbr title=&quot;HyperText Markup Langage&quot;&gt;HTML&lt;/abbr&gt; should use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;abbr&amp;gt;&lt;/code&gt;, with an optional &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;title&lt;/code&gt; attribute for the full phrase.&lt;/li&gt; &lt;li&gt;Citations, like &lt;cite&gt;— Mark Otto&lt;/cite&gt;, should use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;cite&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;&lt;del&gt;Deleted&lt;/del&gt; text should use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;del&amp;gt;&lt;/code&gt; and &lt;ins&gt;inserted&lt;/ins&gt; text should use &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;ins&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;Superscript &lt;sup&gt;text&lt;/sup&gt; uses &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;sup&amp;gt;&lt;/code&gt; and subscript &lt;sub&gt;text&lt;/sub&gt; uses &lt;code class=&quot;language-plaintext highlighter-rouge&quot;&gt;&amp;lt;sub&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;/ul&gt; &lt;p&gt;Most of these elements are styled by browsers with few modifications on our part.&lt;/p&gt; &lt;h2&gt;Heading&lt;/h2&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h3&gt;Sub-heading&lt;/h3&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;pre&gt;&lt;code&gt;Example code block&lt;/code&gt;&lt;/pre&gt; &lt;p&gt;This is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout.&lt;/p&gt;', '2021-09-02', 'Tia creide'),
(4, 'Tempo de pandemia ', 'Testando', '2121-02-02', 'Madruga'),
(5, 'Mussum ipsum', 'Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis! Mé faiz elementum girarzis, nisi eros vermeio. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.\r\n\r\nPaisis, filhis, espiritis santis. Interagi no mé, cursus quis, vehicula ac nisi. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nEm pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Suco de cevadiss deixa as pessoas mais interessantis. Diuretics paradis num copo é motivis de denguis.\r\n\r\nAtirei o pau no gatis, per gatis num morreus. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Delegadis gente finis, bibendum egestas augue arcu ut est. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.\r\n\r\nLeite de capivaris, leite de mula manquis sem cabeça. Viva Forevis aptent taciti sociosqu ad litora torquent. In elementis mé pra quem é amistosis quis leo. Quem num gosta di mé, boa gentis num é.\r\n\r\nManduma pindureta quium dia nois paga. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Per aumento de cachacis, eu reclamis. Pra lá , depois divoltis porris, paradis.\r\n\r\nCasamentiss faiz malandris se pirulitá. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.', '2021-09-26', 'Mussum'),
(6, 'Html test', '&lt;h2 class=\'blog-post-title\'&gt;Sample blog post&lt;/h2&gt; &lt;p class=\'blog-post-meta\'&gt;January 1, 2021 by &lt;a href=\'#\'&gt;Mark&lt;/a&gt;&lt;/p&gt; &lt;p&gt;This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.&lt;/p&gt; &lt;hr&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h2&gt;Blockquotes&lt;/h2&gt; &lt;p&gt;This is an example blockquote in action:&lt;/p&gt; &lt;blockquote class=\'blockquote\'&gt; &lt;p&gt;Quoted text goes here.&lt;/p&gt; &lt;/blockquote&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h3&gt;Example lists&lt;/h3&gt; &lt;p&gt;This is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:&lt;/p&gt; &lt;ul&gt; &lt;li&gt;First list item&lt;/li&gt; &lt;li&gt;Second list item with a longer description&lt;/li&gt; &lt;li&gt;Third list item to close it out&lt;/li&gt; &lt;/ul&gt; &lt;p&gt;And this is an ordered list:&lt;/p&gt; &lt;ol&gt; &lt;li&gt;First list item&lt;/li&gt; &lt;li&gt;Second list item with a longer description&lt;/li&gt; &lt;li&gt;Third list item to close it out&lt;/li&gt; &lt;/ol&gt; &lt;p&gt;And this is a definiton list:&lt;/p&gt; &lt;dl&gt; &lt;dt&gt;HyperText Markup Language (HTML)&lt;/dt&gt; &lt;dd&gt;The language used to describe and define the content of a Web page&lt;/dd&gt; &lt;dt&gt;Cascading Style Sheets (CSS)&lt;/dt&gt; &lt;dd&gt;Used to describe the appearance of Web content&lt;/dd&gt; &lt;dt&gt;JavaScript (JS)&lt;/dt&gt; &lt;dd&gt;The programming language used to build advanced Web sites and applications&lt;/dd&gt; &lt;/dl&gt; &lt;h2&gt;Inline HTML elements&lt;/h2&gt; &lt;p&gt;HTML defines a long list of available inline tags, a complete list of which can be found on the &lt;a href=\'https://developer.mozilla.org/en-US/docs/Web/HTML/Element\'&gt;Mozilla Developer Network&lt;/a&gt;.&lt;/p&gt; &lt;ul&gt; &lt;li&gt;&lt;strong&gt;To bold text&lt;/strong&gt;, use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;strong&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;&lt;em&gt;To italicize text&lt;/em&gt;, use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;em&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;Abbreviations, like &lt;abbr title=\'HyperText Markup Langage\'&gt;HTML&lt;/abbr&gt; should use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;abbr&amp;gt;&lt;/code&gt;, with an optional &lt;code class=\'language-plaintext highlighter-rouge\'&gt;title&lt;/code&gt; attribute for the full phrase.&lt;/li&gt; &lt;li&gt;Citations, like &lt;cite&gt;— Mark Otto&lt;/cite&gt;, s\'hould use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;cite&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;&lt;del&gt;Deleted&lt;/del&gt; text should use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;del&amp;gt;&lt;/code&gt; and &lt;ins&gt;inserted&lt;/ins&gt; text should use &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;ins&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;li&gt;Superscript &lt;sup&gt;text&lt;/sup&gt; uses &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;sup&amp;gt;&lt;/code&gt; and subscript &lt;sub&gt;text&lt;/sub&gt; uses &lt;code class=\'language-plaintext highlighter-rouge\'&gt;&amp;lt;sub&amp;gt;&lt;/code&gt;.&lt;/li&gt; &lt;/ul&gt; &lt;p&gt;Most of these elements are styled by browsers with few modifications on our part.&lt;/p&gt; &lt;h2&gt;Heading&lt;/h2&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;h3&gt;Sub-heading&lt;/h3&gt; &lt;p&gt;This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.&lt;/p&gt; &lt;pre&gt;&lt;code&gt;Example code block&lt;/code&gt;&lt;/pre&gt; &lt;p&gt;This is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout.&lt;/p&gt;', '2021-09-27', 'Tia Cleide'),
(7, 'Mussum ipsum', 'Mussum Ipsum, cacilds vidis litro abertis. Quem manda na minha terra sou euzis! Mé faiz elementum girarzis, nisi eros vermeio. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.\r\n\r\nPaisis, filhis, espiritis santis. Interagi no mé, cursus quis, vehicula ac nisi. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl.\r\n\r\nEm pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Suco de cevadiss deixa as pessoas mais interessantis. Diuretics paradis num copo é motivis de denguis.\r\n\r\nAtirei o pau no gatis, per gatis num morreus. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Delegadis gente finis, bibendum egestas augue arcu ut est. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.\r\n\r\nLeite de capivaris, leite de mula manquis sem cabeça. Viva Forevis aptent taciti sociosqu ad litora torquent. In elementis mé pra quem é amistosis quis leo. Quem num gosta di mé, boa gentis num é.\r\n\r\nManduma pindureta quium dia nois paga. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Per aumento de cachacis, eu reclamis. Pra lá , depois divoltis porris, paradis.\r\n\r\nCasamentiss faiz malandris se pirulitá. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio.', '2021-09-26', 'Mussum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `data_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nome`, `email`, `cpf`, `endereco`, `data_n`) VALUES
(2, 'alice do madruga LINDA', 'at.risus.Nunc@temporbibendum.com', '987654321', '973-602 Auctor, Av.', '2000-09-21'),
(3, 'madruga carecao LINDO', 'mail@mail.com', '321987654545', '123 asdlkmals', '1999-10-01'),
(4, 'vlaliuinasd LINDI', 'asdasda', '092802938640293', '653 Ullamcorper, Street', '2021-09-14'),
(5, 'Chloe Mcdowell', 'erat.neque@Nullam.ca', '1321654987', '6445 Ornare Rd.', '2021-09-14'),
(6, 'Curran Chaney', 'sed.orci@turpisnonenim.edu', '1321654987', 'P.O. Box 472, 1369 Accumsan Rd.', '2021-09-14'),
(7, 'Teegan Mann', 'blandit.congue.In@mi.net', '1321654987', 'P.O. Box 463, 816 Ultrices St.', '2021-09-14'),
(8, 'Libby Chaney', 'Cras.dolor.dolor@nec.net', '1321654987', 'P.O. Box 652, 6376 Posuere Street', '2021-09-14'),
(9, 'Zachery Hansen', 'nisi@Nunc.org', '1321654987', '5952 Fames Rd.', '2021-09-14'),
(10, 'Tyrone English', 'porttitor.vulputate.posuere@velvulputateeu.net', '1321654987', 'Ap #526-4578 Nunc Rd.', '2021-09-14'),
(11, 'Saimon alcântara bezerra', 'email@email.com', '1321654987', 'rua sei la , av. invento depois', '2021-09-14'),
(12, 'maria vai com as outras', 'madruga@druga.drugs', '258369147', '1234 maid', '2002-02-02'),
(16, 'maria vai com as outras2', 'lalala@lalala.co', '321987654545', '1234 maid', '2016-12-31'),
(23, 'maria vai com as outras5', 'lalala@lalala.co12', '123123123123', '1234 maid', '2016-12-31'),
(26, 'maria vai com as outras5', 'lalala@lalala.co1233', '123123123123', '1234 maid', '2016-12-31'),
(28, 'maria vai com as outras32', 'lalala@lalala.co12334', '123123123123', '1234 maid', '2016-12-31'),
(32, 'maria vai com as marias', 'maria@airam', '21321654987978', '321654654987', '2001-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `id_item_pedido` int(11) NOT NULL,
  `fk_id_produto` int(11) NOT NULL,
  `fk_id_pedido` int(11) NOT NULL,
  `quantidade_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `tipo_entrega` varchar(100) NOT NULL,
  `data_pedido` datetime NOT NULL,
  `status_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fk_id_cliente`, `tipo_entrega`, `data_pedido`, `status_pedido`) VALUES
(1, 2, 'Transportadora', '2021-09-15 20:49:08', 1),
(2, 2, 'Correio - Caixa registrada', '2021-09-01 06:49:08', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(150) NOT NULL,
  `desc_produto` varchar(200) NOT NULL,
  `valor_produto` float NOT NULL,
  `tamanho_produto` varchar(10) NOT NULL,
  `cor_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `desc_produto`, `valor_produto`, `tamanho_produto`, `cor_produto`) VALUES
(41, 'Bibendum Donec Inc.', 'Lorem ipsum dolor', 55.25, '4', 4),
(42, 'Consequat Consulting', 'Lorem ipsum dolor sit', 44.91, '4', 5),
(43, 'Ultrices Limited', 'Lorem', 45.46, '3', 3),
(44, 'Eros Nec Incorporated', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 22.05, '3', 2),
(45, 'Arcu Sed LLP', 'Lorem ipsum dolor', 98.46, '2', 5),
(46, 'Mauris Id LLP', 'Lorem ipsum dolor sit amet, consectetuer', 37.17, '2', 4),
(47, 'Urna Ut Tincidunt Ltd', 'Lorem ipsum dolor sit amet,', 89.38, '1', 1),
(48, 'Suspendisse Sed Foundation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 19.15, '5', 1),
(49, 'Morbi LLP', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 94.35, '5', 5),
(50, 'Aenean Egestas Hendrerit Industries', 'Lorem ipsum dolor sit amet,', 36.74, '5', 6),
(51, 'Praesent Eu LLP', 'Lorem ipsum', 25.55, '2', 2),
(52, 'Fusce Consulting', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 90.01, '3', 5),
(53, 'Netus Et Consulting', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 35.3, '4', 5),
(54, 'In Ornare Sagittis Corporation', 'Lorem ipsum dolor sit amet, consectetuer', 26.56, '2', 1),
(55, 'Et Institute', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 64.39, '5', 5),
(56, 'Ornare Lectus Justo Incorporated', 'Lorem ipsum dolor sit amet, consectetuer', 17.91, '1', 5),
(57, 'Vivamus Company', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 58.51, '4', 4),
(58, 'Eget Corp.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 86.49, '4', 6),
(59, 'Et Nunc Industries', 'Lorem ipsum dolor sit amet, consectetuer', 4.46, '2', 2),
(60, 'Justo Eu Arcu Associates', 'Lorem', 78.96, '1', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login_usuario` int(11) NOT NULL,
  `senha_usuario` int(11) NOT NULL,
  `nivel_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_post`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD UNIQUE KEY `cliente_email` (`email`),
  ADD KEY `cliente_nome` (`nome`);

--
-- Índices para tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`id_item_pedido`),
  ADD KEY `fk_id_produto` (`fk_id_produto`),
  ADD KEY `fk_id_pedido` (`fk_id_pedido`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_id_cliente` (`fk_id_cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `nome_produto` (`nome_produto`),
  ADD KEY `nome_produto_2` (`nome_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `chavezinha feliz` FOREIGN KEY (`fk_id_pedido`) REFERENCES `pedido` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
