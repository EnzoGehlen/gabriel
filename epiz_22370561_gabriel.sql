-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql304.epizy.com
-- Tempo de Geração: 12/02/2019 às 05:12:42
-- Versão do Servidor: 5.6.41-84.1
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `epiz_22370561_gabriel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE IF NOT EXISTS `bairros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `nome`) VALUES
(2, 'Pindorama'),
(3, 'Glória'),
(5, 'Santa Inês');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(8, 'Terrenos'),
(2, 'Apartamentos'),
(6, 'Casas'),
(4, 'Áreas Rurais '),
(7, 'Salas Comerciais '),
(16, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `lido` tinyint(1) NOT NULL,
  `lixo` tinyint(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `titulo`, `email`, `nome`, `mensagem`, `lido`, `lixo`, `created`) VALUES
(6, 'teste', 'enzo.gehlen@hotmail.com', 'Enzo', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 1, '2018-08-23 23:27:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diferenciais`
--

CREATE TABLE IF NOT EXISTS `diferenciais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icone_id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `diferenciais`
--

INSERT INTO `diferenciais` (`id`, `icone_id`, `titulo`, `descricao`) VALUES
(2, 196, 'Imóveis bem avaliados', '<p>Possu&iacute;mos alguma coisa, etc e tal</p>'),
(4, 180, 'Diferencial 2', '<p>Texto teste de tipografia</p>'),
(5, 254, 'Acesse em qualquer lugar', '<p><font color="#000000">A qualquer momento, em todo o lugar. Estamos sempre prontos para lhe atender.</font></p>'),
(6, 121, 'Diferencial 4', '<p>Texto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografia</p>'),
(7, 229, 'Diferencial 5', '<p>Texto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografiaTexto teste de tipografia</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g_users`
--

CREATE TABLE IF NOT EXISTS `g_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `nome` text NOT NULL,
  `senha` varchar(15) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `g_users`
--

INSERT INTO `g_users` (`id`, `email`, `nome`, `senha`, `imagem`) VALUES
(1, 'e@e.e', 'Enzo Gehlen', 'e', '11001889_623474694452239_8630655910121273189_n.jpg'),
(3, 'admin@admin', 'Admin', 'admin', 'Neo-as-Jesus-Christ-in-The-Matrix-movie-rs-750x500.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `icon`
--

CREATE TABLE IF NOT EXISTS `icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=439 ;

--
-- Extraindo dados da tabela `icon`
--

INSERT INTO `icon` (`id`, `nome`) VALUES
(1, 'fa fa-address-book	\n'),
(2, 'fa fa-address-book-o	\n'),
(3, 'fa fa-address-card	\n'),
(4, 'fa fa-address-card-o	\n'),
(5, 'fa fa-adjust	\n'),
(6, 'fa fa-american-sign-language-interpreting	\n'),
(7, 'fa fa-anchor	\n'),
(8, 'fa fa-archive	\n'),
(9, 'fa fa-area-chart	\n'),
(10, 'fa fa-arrows	\n'),
(11, 'fa fa-arrows-h	\n'),
(12, 'fa fa-arrows-v	\n'),
(13, 'fa fa-asl-interpreting	\n'),
(14, 'fa fa-assistive-listening-systems	\n'),
(15, 'fa fa-asterisk	\n'),
(16, 'fa fa-at	\n'),
(17, 'fa fa-automobile	\n'),
(18, 'fa fa-audio-description	\n'),
(19, 'fa fa-balance-scale	\n'),
(20, 'fa fa-ban	\n'),
(21, 'fa fa-bank	\n'),
(22, 'fa fa-bar-chart	\n'),
(23, 'fa fa-bar-chart-o	\n'),
(24, 'fa fa-barcode	\n'),
(25, 'fa fa-bars	\n'),
(26, 'fa fa-bath	\n'),
(27, 'fa fa-bathtub	\n'),
(28, 'fa fa-battery-0	\n'),
(29, 'fa fa-battery-1	\n'),
(30, 'fa fa-battery-2	\n'),
(31, 'fa fa-battery-3	\n'),
(32, 'fa fa-battery-4	\n'),
(33, 'fa fa-battery-empty	\n'),
(34, 'fa fa-battery-full	\n'),
(35, 'fa fa-battery-half	\n'),
(36, 'fa fa-battery-quarter	\n'),
(37, 'fa fa-battery-three-quarters	\n'),
(38, 'fa fa-bed	\n'),
(39, 'fa fa-beer	\n'),
(40, 'fa fa-bell	\n'),
(41, 'fa fa-bell-o	\n'),
(42, 'fa fa-bell-slash	\n'),
(43, 'fa fa-bell-slash-o	\n'),
(44, 'fa fa-bicycle	\n'),
(45, 'fa fa-binoculars	\n'),
(46, 'fa fa-birthday-cake	\n'),
(47, 'fa fa-blind	\n'),
(48, 'fa fa-bolt	\n'),
(49, 'fa fa-bomb	\n'),
(50, 'fa fa-book	\n'),
(51, 'fa fa-bookmark	\n'),
(52, 'fa fa-bookmark-o	\n'),
(53, 'fa fa-braille	\n'),
(54, 'fa fa-briefcase	\n'),
(55, 'fa fa-bug	\n'),
(56, 'fa fa-building	\n'),
(57, 'fa fa-building-o	\n'),
(58, 'fa fa-bullhorn	\n'),
(59, 'fa fa-bullseye	\n'),
(60, 'fa fa-bus	\n'),
(61, 'fa fa-cab	\n'),
(62, 'fa fa-calculator	\n'),
(63, 'fa fa-calendar	\n'),
(64, 'fa fa-calendar-o	\n'),
(65, 'fa fa-calendar-check-o	\n'),
(66, 'fa fa-calendar-minus-o	\n'),
(67, 'fa fa-calendar-plus-o	\n'),
(68, 'fa fa-calendar-times-o	\n'),
(69, 'fa fa-camera	\n'),
(70, 'fa fa-camera-retro	\n'),
(71, 'fa fa-car	\n'),
(72, 'fa fa-caret-square-o-down	\n'),
(73, 'fa fa-caret-square-o-left	\n'),
(74, 'fa fa-caret-square-o-right	\n'),
(75, 'fa fa-caret-square-o-up	\n'),
(76, 'fa fa-cart-arrow-down	\n'),
(77, 'fa fa-cart-plus	\n'),
(78, 'fa fa-cc	\n'),
(79, 'fa fa-certificate	\n'),
(80, 'fa fa-check	\n'),
(81, 'fa fa-check-circle	\n'),
(82, 'fa fa-check-circle-o	\n'),
(83, 'fa fa-check-square	\n'),
(84, 'fa fa-check-square-o	\n'),
(85, 'fa fa-child	\n'),
(86, 'fa fa-circle	\n'),
(87, 'fa fa-circle-o	\n'),
(88, 'fa fa-circle-o-notch	\n'),
(89, 'fa fa-circle-thin	\n'),
(90, 'fa fa-clock-o	\n'),
(91, 'fa fa-clone	\n'),
(92, 'fa fa-close	\n'),
(93, 'fa fa-cloud	\n'),
(94, 'fa fa-cloud-download	\n'),
(95, 'fa fa-cloud-upload	\n'),
(96, 'fa fa-code	\n'),
(97, 'fa fa-code-fork	\n'),
(98, 'fa fa-coffee	\n'),
(99, 'fa fa-cog	\n'),
(100, 'fa fa-cogs	\n'),
(101, 'fa fa-comment	\n'),
(102, 'fa fa-comment-o	\n'),
(103, 'fa fa-comments	\n'),
(104, 'fa fa-comments-o	\n'),
(105, 'fa fa-commenting	\n'),
(106, 'fa fa-commenting-o	\n'),
(107, 'fa fa-compass	\n'),
(108, 'fa fa-copyright	\n'),
(109, 'fa fa-credit-card	\n'),
(110, 'fa fa-credit-card-alt	\n'),
(111, 'fa fa-creative-commons	\n'),
(112, 'fa fa-crop	\n'),
(113, 'fa fa-crosshairs	\n'),
(114, 'fa fa-cube	\n'),
(115, 'fa fa-cubes	\n'),
(116, 'fa fa-cutlery	\n'),
(117, 'fa fa-dashboard	\n'),
(118, 'fa fa-database	\n'),
(119, 'fa fa-deaf	\n'),
(120, 'fa fa-deafness	\n'),
(121, 'fa fa-desktop	\n'),
(122, 'fa fa-diamond	\n'),
(123, 'fa fa-dot-circle-o	\n'),
(124, 'fa fa-download	\n'),
(125, 'fa fa-drivers-license	\n'),
(126, 'fa fa-drivers-license-o	\n'),
(127, 'fa fa-edit	\n'),
(128, 'fa fa-ellipsis-h	\n'),
(129, 'fa fa-ellipsis-v	\n'),
(130, 'fa fa-envelope	\n'),
(131, 'fa fa-envelope-o	\n'),
(132, 'fa fa-envelope-open	\n'),
(133, 'fa fa-envelope-open-o	\n'),
(134, 'fa fa-envelope-square	\n'),
(135, 'fa fa-eraser	\n'),
(136, 'fa fa-exchange	\n'),
(137, 'fa fa-exclamation	\n'),
(138, 'fa fa-exclamation-circle	\n'),
(139, 'fa fa-exclamation-triangle	\n'),
(140, 'fa fa-external-link	\n'),
(141, 'fa fa-external-link-square	\n'),
(142, 'fa fa-eye	\n'),
(143, 'fa fa-eye-slash	\n'),
(144, 'fa fa-eyedropper	\n'),
(145, 'fa fa-fax	\n'),
(146, 'fa fa-female	\n'),
(147, 'fa fa-fighter-jet	\n'),
(148, 'fa fa-file-archive-o	\n'),
(149, 'fa fa-file-audio-o	\n'),
(150, 'fa fa-file-code-o	\n'),
(151, 'fa fa-file-excel-o	\n'),
(152, 'fa fa-file-image-o	\n'),
(153, 'fa fa-file-movie-o	\n'),
(154, 'fa fa-file-pdf-o	\n'),
(155, 'fa fa-file-photo-o	\n'),
(156, 'fa fa-file-picture-o	\n'),
(157, 'fa fa-file-powerpoint-o	\n'),
(158, 'fa fa-file-sound-o	\n'),
(159, 'fa fa-file-video-o	\n'),
(160, 'fa fa-file-word-o	\n'),
(161, 'fa fa-file-zip-o	\n'),
(162, 'fa fa-film	\n'),
(163, 'fa fa-filter	\n'),
(164, 'fa fa-fire	\n'),
(165, 'fa fa-fire-extinguisher	\n'),
(166, 'fa fa-flag	\n'),
(167, 'fa fa-flag-checkered	\n'),
(168, 'fa fa-flag-o	\n'),
(169, 'fa fa-flash	\n'),
(170, 'fa fa-flask	\n'),
(171, 'fa fa-folder	\n'),
(172, 'fa fa-folder-o	\n'),
(173, 'fa fa-folder-open	\n'),
(174, 'fa fa-folder-open-o	\n'),
(175, 'fa fa-frown-o	\n'),
(176, 'fa fa-futbol-o	\n'),
(177, 'fa fa-gamepad	\n'),
(178, 'fa fa-gavel	\n'),
(179, 'fa fa-gear	\n'),
(180, 'fa fa-gears	\n'),
(181, 'fa fa-genderless	\n'),
(182, 'fa fa-gift	\n'),
(183, 'fa fa-glass	\n'),
(184, 'fa fa-globe	\n'),
(185, 'fa fa-graduation-cap	\n'),
(186, 'fa fa-group	\n'),
(187, 'fa fa-hard-of-hearing	\n'),
(188, 'fa fa-hdd-o	\n'),
(189, 'fa fa-handshake-o	\n'),
(190, 'fa fa-hashtag	\n'),
(191, 'fa fa-headphones	\n'),
(192, 'fa fa-heart	\n'),
(193, 'fa fa-heart-o	\n'),
(194, 'fa fa-heartbeat	\n'),
(195, 'fa fa-history	\n'),
(196, 'fa fa-home	\n'),
(197, 'fa fa-hotel	\n'),
(198, 'fa fa-hourglass	\n'),
(199, 'fa fa-hourglass-1	\n'),
(200, 'fa fa-hourglass-2	\n'),
(201, 'fa fa-hourglass-3	\n'),
(202, 'fa fa-hourglass-end	\n'),
(203, 'fa fa-hourglass-half	\n'),
(204, 'fa fa-hourglass-o	\n'),
(205, 'fa fa-hourglass-start	\n'),
(206, 'fa fa-i-cursor	\n'),
(207, 'fa fa-id-badge	\n'),
(208, 'fa fa-id-card	\n'),
(209, 'fa fa-id-card-o	\n'),
(210, 'fa fa-image	\n'),
(211, 'fa fa-inbox	\n'),
(212, 'fa fa-industry	\n'),
(213, 'fa fa-info	\n'),
(214, 'fa fa-info-circle	\n'),
(215, 'fa fa-institution	\n'),
(216, 'fa fa-key	\n'),
(217, 'fa fa-keyboard-o	\n'),
(218, 'fa fa-language	\n'),
(219, 'fa fa-laptop	\n'),
(220, 'fa fa-leaf	\n'),
(221, 'fa fa-legal	\n'),
(222, 'fa fa-lemon-o	\n'),
(223, 'fa fa-level-down	\n'),
(224, 'fa fa-level-up	\n'),
(225, 'fa fa-life-bouy	\n'),
(226, 'fa fa-life-buoy	\n'),
(227, 'fa fa-life-ring	\n'),
(228, 'fa fa-life-saver	\n'),
(229, 'fa fa-lightbulb-o	\n'),
(230, 'fa fa-line-chart	\n'),
(231, 'fa fa-location-arrow	\n'),
(232, 'fa fa-lock	\n'),
(233, 'fa fa-low-vision	\n'),
(234, 'fa fa-magic	\n'),
(235, 'fa fa-magnet	\n'),
(236, 'fa fa-mail-forward	\n'),
(237, 'fa fa-mail-reply	\n'),
(238, 'fa fa-mail-reply-all	\n'),
(239, 'fa fa-male	\n'),
(240, 'fa fa-map	\n'),
(241, 'fa fa-map-o	\n'),
(242, 'fa fa-map-pin	\n'),
(243, 'fa fa-map-signs	\n'),
(244, 'fa fa-map-marker	\n'),
(245, 'fa fa-meh-o	\n'),
(246, 'fa fa-microchip	\n'),
(247, 'fa fa-microphone	\n'),
(248, 'fa fa-microphone-slash	\n'),
(249, 'fa fa-minus	\n'),
(250, 'fa fa-minus-circle	\n'),
(251, 'fa fa-minus-square	\n'),
(252, 'fa fa-minus-square-o	\n'),
(253, 'fa fa-mobile	\n'),
(254, 'fa fa-mobile-phone	\n'),
(255, 'fa fa-money	\n'),
(256, 'fa fa-moon-o	\n'),
(257, 'fa fa-mortar-board	\n'),
(258, 'fa fa-motorcycle	\n'),
(259, 'fa fa-mouse-pointer	\n'),
(260, 'fa fa-music	\n'),
(261, 'fa fa-navicon	\n'),
(262, 'fa fa-newspaper-o	\n'),
(263, 'fa fa-object-group	\n'),
(264, 'fa fa-object-ungroup	\n'),
(265, 'fa fa-paint-brush	\n'),
(266, 'fa fa-paper-plane	\n'),
(267, 'fa fa-paper-plane-o	\n'),
(268, 'fa fa-paw	\n'),
(269, 'fa fa-pencil	\n'),
(270, 'fa fa-pencil-square	\n'),
(271, 'fa fa-pencil-square-o	\n'),
(272, 'fa fa-percent	\n'),
(273, 'fa fa-phone	\n'),
(274, 'fa fa-phone-square	\n'),
(275, 'fa fa-photo	\n'),
(276, 'fa fa-picture-o	\n'),
(277, 'fa fa-pie-chart	\n'),
(278, 'fa fa-plane	\n'),
(279, 'fa fa-plug	\n'),
(280, 'fa fa-plus	\n'),
(281, 'fa fa-plus-circle	\n'),
(282, 'fa fa-plus-square	\n'),
(283, 'fa fa-plus-square-o	\n'),
(284, 'fa fa-podcast	\n'),
(285, 'fa fa-power-off	\n'),
(286, 'fa fa-print	\n'),
(287, 'fa fa-puzzle-piece	\n'),
(288, 'fa fa-qrcode	\n'),
(289, 'fa fa-question	\n'),
(290, 'fa fa-question-circle	\n'),
(291, 'fa fa-question-circle-o	\n'),
(292, 'fa fa-quote-left	\n'),
(293, 'fa fa-quote-right	\n'),
(294, 'fa fa-random	\n'),
(295, 'fa fa-recycle	\n'),
(296, 'fa fa-refresh	\n'),
(297, 'fa fa-registered	\n'),
(298, 'fa fa-remove	\n'),
(299, 'fa fa-reorder	\n'),
(300, 'fa fa-reply	\n'),
(301, 'fa fa-reply-all	\n'),
(302, 'fa fa-retweet	\n'),
(303, 'fa fa-road	\n'),
(304, 'fa fa-rocket	\n'),
(305, 'fa fa-rss	\n'),
(306, 'fa fa-rss-square	\n'),
(307, 'fa fa-s15	\n'),
(308, 'fa fa-search	\n'),
(309, 'fa fa-search-minus	\n'),
(310, 'fa fa-search-plus	\n'),
(311, 'fa fa-send	\n'),
(312, 'fa fa-send-o	\n'),
(313, 'fa fa-server	\n'),
(314, 'fa fa-share	\n'),
(315, 'fa fa-share-alt	\n'),
(316, 'fa fa-share-alt-square	\n'),
(317, 'fa fa-share-square	\n'),
(318, 'fa fa-share-square-o	\n'),
(319, 'fa fa-shield	\n'),
(320, 'fa fa-ship	\n'),
(321, 'fa fa-shopping-bag	\n'),
(322, 'fa fa-shopping-basket	\n'),
(323, 'fa fa-shopping-cart	\n'),
(324, 'fa fa-shower	\n'),
(325, 'fa fa-sign-in	\n'),
(326, 'fa fa-sign-out	\n'),
(327, 'fa fa-sign-language	\n'),
(328, 'fa fa-signal	\n'),
(329, 'fa fa-signing	\n'),
(330, 'fa fa-sitemap	\n'),
(331, 'fa fa-sliders	\n'),
(332, 'fa fa-smile-o	\n'),
(333, 'fa fa-snowflake-o	\n'),
(334, 'fa fa-soccer-ball-o	\n'),
(335, 'fa fa-sort	\n'),
(336, 'fa fa-sort-alpha-asc	\n'),
(337, 'fa fa-sort-alpha-desc	\n'),
(338, 'fa fa-sort-amount-asc	\n'),
(339, 'fa fa-sort-amount-desc	\n'),
(340, 'fa fa-sort-asc	\n'),
(341, 'fa fa-sort-desc	\n'),
(342, 'fa fa-sort-down	\n'),
(343, 'fa fa-sort-numeric-asc	\n'),
(344, 'fa fa-sort-numeric-desc	\n'),
(345, 'fa fa-sort-up	\n'),
(346, 'fa fa-space-shuttle	\n'),
(347, 'fa fa-spinner	\n'),
(348, 'fa fa-spoon	\n'),
(349, 'fa fa-square	\n'),
(350, 'fa fa-square-o	\n'),
(351, 'fa fa-star	\n'),
(352, 'fa fa-star-half	\n'),
(353, 'fa fa-star-half-empty	\n'),
(354, 'fa fa-star-half-full	\n'),
(355, 'fa fa-star-half-o	\n'),
(356, 'fa fa-star-o	\n'),
(357, 'fa fa-sticky-note	\n'),
(358, 'fa fa-sticky-note-o	\n'),
(359, 'fa fa-street-view	\n'),
(360, 'fa fa-suitcase	\n'),
(361, 'fa fa-sun-o	\n'),
(362, 'fa fa-support	\n'),
(363, 'fa fa-tablet	\n'),
(364, 'fa fa-tachometer	\n'),
(365, 'fa fa-tag	\n'),
(366, 'fa fa-tags	\n'),
(367, 'fa fa-tasks	\n'),
(368, 'fa fa-taxi	\n'),
(369, 'fa fa-television	\n'),
(370, 'fa fa-terminal	\n'),
(371, 'fa fa-thermometer	\n'),
(372, 'fa fa-thermometer-0	\n'),
(373, 'fa fa-thermometer-1	\n'),
(374, 'fa fa-thermometer-2	\n'),
(375, 'fa fa-thermometer-3	\n'),
(376, 'fa fa-thermometer-4	\n'),
(377, 'fa fa-thermometer-empty	\n'),
(378, 'fa fa-thermometer-full	\n'),
(379, 'fa fa-thermometer-half	\n'),
(380, 'fa fa-thermometer-quarter	\n'),
(381, 'fa fa-thermometer-three-quarters	\n'),
(382, 'fa fa-thumb-tack	\n'),
(383, 'fa fa-thumbs-down	\n'),
(384, 'fa fa-thumbs-o-up	\n'),
(385, 'fa fa-thumbs-up	\n'),
(386, 'fa fa-ticket	\n'),
(387, 'fa fa-times	\n'),
(388, 'fa fa-times-circle	\n'),
(389, 'fa fa-times-circle-o	\n'),
(390, 'fa fa-times-rectangle	\n'),
(391, 'fa fa-times-rectangle-o	\n'),
(392, 'fa fa-tint	\n'),
(393, 'fa fa-toggle-down	\n'),
(394, 'fa fa-toggle-left	\n'),
(395, 'fa fa-toggle-right	\n'),
(396, 'fa fa-toggle-up	\n'),
(397, 'fa fa-toggle-off	\n'),
(398, 'fa fa-toggle-on	\n'),
(399, 'fa fa-trademark	\n'),
(400, 'fa fa-trash	\n'),
(401, 'fa fa-trash-o	\n'),
(402, 'fa fa-tree	\n'),
(403, 'fa fa-trophy	\n'),
(404, 'fa fa-truck	\n'),
(405, 'fa fa-tty	\n'),
(406, 'fa fa-tv	\n'),
(407, 'fa fa-umbrella	\n'),
(408, 'fa fa-universal-access	\n'),
(409, 'fa fa-university	\n'),
(410, 'fa fa-unlock	\n'),
(411, 'fa fa-unlock-alt	\n'),
(412, 'fa fa-unsorted	\n'),
(413, 'fa fa-upload	\n'),
(414, 'fa fa-user	\n'),
(415, 'fa fa-user-circle	\n'),
(416, 'fa fa-user-circle-o	\n'),
(417, 'fa fa-user-o	\n'),
(418, 'fa fa-user-plus	\n'),
(419, 'fa fa-user-secret	\n'),
(420, 'fa fa-user-times	\n'),
(421, 'fa fa-users	\n'),
(422, 'fa fa-vcard	\n'),
(423, 'fa fa-vcard-o	\n'),
(424, 'fa fa-video-camera	\n'),
(425, 'fa fa-volume-control-phone	\n'),
(426, 'fa fa-volume-down	\n'),
(427, 'fa fa-volume-off	\n'),
(428, 'fa fa-volume-up	\n'),
(429, 'fa fa-warning	\n'),
(430, 'fa fa-wheelchair	\n'),
(431, 'fa fa-wheelchair-alt	\n'),
(432, 'fa fa-window-close	\n'),
(433, 'fa fa-window-close-o	\n'),
(434, 'fa fa-window-maximize	\n'),
(435, 'fa fa-window-minimize	\n'),
(436, 'fa fa-window-restore	\n'),
(437, 'fa fa-wifi	\n'),
(438, 'fa fa-wrench');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) NOT NULL,
  `descricao` text NOT NULL,
  `infraestrutura` text,
  `imagem1` varchar(1000) NOT NULL,
  `imagem2` text,
  `imagem3` text,
  `imagem4` text,
  `imagem5` text,
  `imagem6` text,
  `latitude` varchar(50) DEFAULT NULL,
  `bairro_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `destaque` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `titulo`, `descricao`, `infraestrutura`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `imagem6`, `latitude`, `bairro_id`, `categoria_id`, `longitude`, `destaque`) VALUES
(38, 'v36', '', '', '1823528156.JPG', '496927818.JPG', '2002099850.', '1906351788.', '1998127556.', '1379223784.', '', 0, 6, '', 0),
(36, 'V24', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>LINHA TURVO</p>\r\n<p>VALOR: R$180.000,00</p>\r\n<p>&Aacute;REA TOTAL: 63.000 m&sup2; ( 6,3 HECTARES)<br />&Aacute;REA DE PLANTIO: 3HECTARES</p>', '', '1796467723.JPG', '1763379642.JPG', '1359602535.JPG', '432022339.JPG', '272134158.JPG', '1732649265.JPG', '', 0, 4, '', 0),
(37, 'v29', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>BELA VISTA</p>\r\n<p>VALOR: R$ 140.000,00</p>\r\n<p>&Aacute;REA CONSTRUIDA: N&atilde;o possui</p>\r\n<p>&Aacute;REA TOTAL: 3.240,00 m&sup2;</p>', '', '128126447.JPG', '1289870722.JPG', '1930710147.', '356856634.', '1877618432.', '846664061.', '', 0, 4, '', 0),
(27, 'Sala Comercial', '<p>VENDE-SE SALAS COMERCIAIS NO CENTRO PROFISSIONAL<br />VALOR: SOB CONSULTA<br />&Aacute;REA TOTAL: 71,44 m&sup2;<br />&Aacute;REA PRIVADA: 55,90 m&sup2;<br />PONTO DE REFER&Ecirc;NCIA: EM FRENTE A FENSTERSEIFER<span class="text_exposed_show"><br />CRECI 52472 F</span></p>', '', '1201244144.JPG', '1387247324.JPG', '1831794886.JPG', '572930586.JPG', '1666367742.JPG', '943314779.JPG', '', 0, 7, '', 0),
(28, 'Área Rural', '<p>&Aacute;REA RURAL A VENDA, COM CERCA DE 4 MIL P&Eacute;S DE EUCALIPTOS.<br /><br />DIVISA COM O RIO<br />LAJEADO ERVAL NOVO&nbsp;<br /><span class="text_exposed_show"><br />VALOR : R$ 120.000,00&nbsp;<br />&Aacute;REA TOTAL: 90.000 m&sup2; ( 9 HECTARES)<br /><br />PARA MAIS INFORMA&Ccedil;&Otilde;ES: 55 9 9623-7090 (whatsapp)&nbsp;<br /><br />CRECI: 52472 F</span></p>', '', '774070165.JPG', '1004541794.JPG', '542158797.', '1464433837.', '1888282529.', '1674984702.', '', 0, 4, '', 0),
(32, 'Casa de Campo', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>LINHA FLORESTA</p>\r\n<p>VALOR: 150.000,00</p>\r\n<p>&Aacute;REA PRIVADA: 108 m&sup2;</p>\r\n<p>&Aacute;REA TOTAL: 10.000 m&sup2; ( 01 HECTARES)</p>', '', '1295778806.JPG', '935452153.JPG', '1226165734.JPG', '1717467609.JPG', '357362587.', '1232070323.', '', 0, 4, '', 0),
(35, 'V22', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>ESPERAN&Ccedil;A DO SUL/ LINHA JARDIM (3 km do sal&atilde;o)</p>\r\n<p>VALOR: R$159.000,00</p>\r\n<p>&Aacute;REA CONSTRUIDA: 70,00 m&sup2;</p>\r\n<p>&Aacute;REA TOTAL: 88.500 m&sup2; ( 8,85 HECTARES) 5,5 hec de m&aacute;quina</p>', '', '1395331274.JPG', '1304876598.JPG', '2130445704.JPG', '476368185.', '784261929.', '1998000521.', '', 0, 4, '', 0),
(33, 'Área Rural', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>TIRADENTES DO SUL</p>\r\n<p>VALOR: 160.000,00</p>\r\n<p>&Aacute;REA TOTAL: 90.000 m&sup2; ( 9 HECTARES)<br />&Aacute;REA DE PLANTIO: 6 HECTARES</p>', '', '1198000680.JPG', '464845603.JPG', '1829296046.', '1661021324.', '498725526.', '1823609251.', '', 0, 4, '', 0),
(34, 'Área Rural V20', '<p>&Aacute;REA DE TERRA A VENDA</p>\r\n<p>LINHA BELA VISTA</p>\r\n<p>VALOR: R$ 360.000,00</p>\r\n<p>&Aacute;REA CONSTRUIDA:&nbsp; 126,00 m&sup2;</p>\r\n<p>&Aacute;REA TOTAL: 55000 m&sup2; ( 5,5 HECTARES)</p>', '', '1144570788.JPG', '289045899.JPG', '1092072645.JPG', '1683349612.JPG', '383348289.JPG', '1574267224.JPG', '', 0, 4, '', 0),
(39, 'V40', '', '', '1346357202.JPG', '1474761760.JPG', '1037780470.JPG', '2101073358.JPG', '1319326810.JPG', '888927291.JPG', '', 0, 6, '', 0),
(40, 'v52', '', '', '1496189966.JPG', '618191120.JPG', '98196290.JPG', '940666842.JPG', '896232440.JPG', '838266332.', '', 0, 6, '', 0),
(41, 'v10', '<p>SALA DE ESTAR COM LAREIRA <br />ESPA&Ccedil;O GOURMET</p>\r\n<p>SALA DE JANTAR</p>\r\n<p>COZINHA</p>\r\n<p>&Aacute;REA DE SERVI&Ccedil;O</p>\r\n<p>SU&Iacute;TE<br />2 DORMIT&Oacute;RIOS<br />BANHEIRO SOCIAL<br />GARAGEM PARA 2 VE&Iacute;CULOS<br />COM CHAPA/ENERGIA SOLAR/BOILER 400L/ABERTURAS DE ITA&Uacute;BA E GESSO</p>', '', '718497981.JPG', '1482359593.JPG', '1397080018.JPG', '1840589431.JPG', '268325092.JPG', '241853974.JPG', '', 0, 6, '', 0),
(42, 'v34', '<p>CASA A VENDA</p>\r\n<p>BAIRRO GL&Oacute;RIA</p>\r\n<p>VALOR: R$185.000,00</p>\r\n<p>&Aacute;REA TOTAL: 461,53 m&sup2;</p>\r\n<p>&Aacute;REA CONSTRUIDA: 70,00 m&sup2;</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;XIMO A ESCOLA 25 DE JULHO</p>', '', '842359438.JPG', '683849486.JPG', '99004038.JPG', '1831942349.JPG', '1531488431.JPG', '1344184647.', '', 0, 6, '', 1),
(43, 'V38', '', '', '142858459.JPG', '1287730210.JPG', '683454475.JPG', '953106764.', '711612725.', '1760265092.', '', 0, 6, '', 0),
(44, 'v51', '<p>CASA EM MADEIRA A VENDA</p>\r\n<p>BAIRRO GL&Oacute;RIA</p>\r\n<p>VALOR: 57.500,00</p>\r\n<p>&Aacute;REA TOTAL: 422,54 m&sup2; (24,00 X 18,00)</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;XIMO AO MANUS MULLER</p>', '', '1456506167.JPG', '455986652.JPG', '2115085040.JPG', '1937574678.', '1592834719.', '1620020064.', '', 0, 6, '', 0),
(45, 'v25', '<p>CASA A VENDA</p>\r\n<p>BAIRRO ILDO MENEGHETTI</p>\r\n<p>VALOR: R$ 560.000,00</p>\r\n<p>&Aacute;REA TOTAL: 396,00 m&sup2;</p>\r\n<p>&Aacute;REA CONSTRU&Iacute;DA: 285,22 m&sup2;</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;XIMO A ESCOLA ILDO MENEGHETTI</p>', '', '406896361.JPG', '190762238.', '1828873677.', '1249875971.', '753988019.', '1898744289.', '', 0, 6, '', 0),
(46, 'v35', '<p>CASA A VENDA</p>\r\n<p>P. GONZALES</p>\r\n<p>&Aacute;REA TOTAL: 1.000 m&sup2;</p>\r\n<p>&Aacute;REA CONSTRUIDA: 135,77 m&sup2;</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;X. A CRECHE VOV&Oacute; PAULINA</p>\r\n<p>VALOR: R$250.000,00</p>', '', '972066222.JPG', '701646962.', '603564269.', '2071680794.', '1713325812.', '1174008600.', '', 0, 6, '', 0),
(47, 'v41', '', '', '1293441515.JPG', '1127516267.JPG', '1746439437.JPG', '1927853903.JPG', '1018500524.JPG', '1264439903.JPG', '', 0, 6, '', 0),
(48, 'V27', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO &Eacute;RICO VERISSIMO</p>\r\n<p>PR&Oacute;XIMO A TORRE DAS LOJAS TR&Ecirc;S PASSOS</p>\r\n<p>VALOR: R$ 115,000,00</p>\r\n<p>&Aacute;REA TOTAL: 450,00 m&sup2;</p>', '', '1085777366.JPG', '856236522.', '1793561304.', '1668789634.', '1729338536.', '1027858469.', '', 0, 8, '', 0),
(49, 'V30', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO &Eacute;RICO VERISSIMO</p>\r\n<p>PR&Oacute;XIMO A ESCOLA &Eacute;RICO VER&Iacute;SSIMO</p>\r\n<p>VALOR: R$ 85,000,00</p>\r\n<p>&Aacute;REA TOTAL: 345 m&sup2; (15X 23)</p>', '', '470030108.JPG', '735040469.', '1888338770.', '22708796.', '1249885080.', '836832032.', '', 0, 8, '', 1),
(50, 'v15', '<p>TERRENO&nbsp; DE ESQUINA&nbsp; A VENDA</p>\r\n<p>BAIRRO GL&Oacute;RIA</p>\r\n<p>VALOR: 58.000,00</p>\r\n<p>&Aacute;REA TOTAL: 456,90 m&sup2;</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;XIMO A ESCOLA 25 DE JULHO</p>', '', '788971209.JPG', '164029932.JPG', '1868052347.JPG', '1318767918.', '604861288.', '375473004.', '', 0, 8, '', 0),
(51, 'v51', '<p>TERRENO&nbsp; DE ESQUINA&nbsp; A VENDA</p>\r\n<p>BAIRRO GL&Oacute;RIA</p>\r\n<p>VALOR: 45.000,00</p>\r\n<p>&Aacute;REA TOTAL: 330,37 m&sup2; (18,50 X 18,00)</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: EM FRENTE AO MANUS MULLER</p>', '', '1454415251.JPG', '1162958484.JPG', '932037058.JPG', '128808551.', '2109211079.', '487908589.', '', 0, 8, '', 1),
(52, 'v26', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO ILDO MENEGHETTI</p>\r\n<p>RUA ASFALTADA, PR&Oacute;XIMO A ESCOLA</p>\r\n<p>VALOR: R$ 51.000,00</p>\r\n<p>&Aacute;REA TOTAL: 306,25 m&sup2;</p>\r\n<p>PONTO DE REFER&Ecirc;NCIA: PR&Oacute;XIMO A ESCOLA ILDO MENEGHETTI</p>', '', '846699212.JPG', '353960454.JPG', '1143471951.JPG', '574249465.', '2135069695.', '575411808.', '', 0, 8, '', 1),
(53, 'v33', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO PINDORAMA</p>\r\n<p>PR&Oacute;XIMO AO POSTO CHARRUA</p>\r\n<p>VALOR: R$ 53.000,00</p>\r\n<p>&Aacute;REA TOTAL: 336,00m&sup2; (12 x 28)</p>', '', '1541194768.JPG', '1118763169.JPG', '1122785808.JPG', '628285229.', '1249464506.', '247938406.', '', 0, 8, '', 0),
(54, 'v36', '', '', '2117653885.JPG', '722870872.JPG', '1815069369.', '522080880.', '1640597450.', '1358525389.', '', 0, 8, '', 1),
(55, 'v42', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO PINDORAMA</p>\r\n<p>PR&Oacute;XIMO AO POSTO CHARRUA</p>\r\n<p>VALOR: R$ 60.000,00</p>\r\n<p>&Aacute;REA TOTAL: 450,00m&sup2; (15 x 30)</p>', '', '1140165887.JPG', '985288493.JPG', '958624182.JPG', '2084150533.JPG', '1660024164.', '79154273.', '', 0, 8, '', 1),
(56, 'v43', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO PINDORAMA</p>\r\n<p>PR&Oacute;XIMO AO POSTO CHARRUA</p>\r\n<p>VALOR: R$ 60.000,00</p>\r\n<p>&Aacute;REA TOTAL: 450,00m&sup2; (15 x 30)</p>', '', '123618852.JPG', '1826471768.JPG', '1906653086.JPG', '375777987.JPG', '279969142.JPG', '78114776.', '', 0, 8, '', 1),
(57, 'v47', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO PINDORAMA</p>\r\n<p>PR&Oacute;XIMO AO POSTO CHARRUA</p>\r\n<p>VALOR: R$ 65.000,00</p>\r\n<p>&Aacute;REA TOTAL: 467,84m&sup2; ( 13,80 x 33,90 )</p>', '', '445961721.JPG', '1529088119.JPG', '2060626980.JPG', '314361612.', '1394230292.', '1100907011.', '', 0, 8, '', 1),
(58, 'v55', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO PINDORAMA</p>\r\n<p>PR&Oacute;XIMO AO POSTO CHARRUA</p>\r\n<p>VALOR: R$ 62.800,00</p>\r\n<p>&Aacute;REA TOTAL: 324,24m&sup2; ( 12,00 x 27,02 )</p>', '', '1147811123.JPG', '354238474.JPG', '1442306808.JPG', '1352746611.', '1856422114.', '717194463.', '', 0, 8, '', 0),
(59, 'v46', '<p>TERRENO A VENDA</p>\r\n<p>BAIRRO SANTA IN&Ecirc;S</p>\r\n<p>PR&Oacute;XIMO AO MERCADO HEELLER</p>\r\n<p>VALOR: R$ 80.000,00</p>\r\n<p>&Aacute;REA TOTAL: 438,70m&sup2; (21,8 x 32,20)</p>', '', '1438977235.JPG', '1760484695.JPG', '665459886.JPG', '1664183440.', '810763003.', '1147778092.', '', 0, 8, '', 0),
(60, 'v18', '<p>Em SEDE NOVA-RS</p>', '', '2059798418.JPG', '599850219.JPG', '413486224.', '956692914.', '545383423.', '1186352685.', '', 0, 8, '', 1),
(61, 'v17', '<p>APARTAMENTO A VENDA</p>\r\n<p>BAIRRO CENTRO</p>\r\n<p>PR&Oacute;XIMO AO COL&Eacute;GIO IPIRANGA</p>\r\n<p>VALOR: R$ 270.000,00</p>\r\n<p>&Aacute;REA TOTAL: 104,07 m&sup2;</p>', '', '726753269.JPG', '2110372097.JPG', '179336058.', '2011933297.', '615717611.', '2053375850.', '', 0, 2, '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pessoa` varchar(150) NOT NULL,
  `cpf_pessoa` varchar(25) DEFAULT NULL,
  `cidade_pessoa` varchar(50) DEFAULT NULL,
  `estado_pessoa` varchar(35) DEFAULT NULL,
  `cep` char(10) DEFAULT NULL,
  `email_pessoa` varchar(50) NOT NULL,
  `telefone_pessoa` char(15) NOT NULL,
  `telefone_pessoa2` char(15) DEFAULT NULL,
  `endereco_imovel` varchar(75) NOT NULL,
  `numero_imovel` int(5) DEFAULT NULL,
  `bairro_imovel` varchar(50) NOT NULL,
  `cidade_imovel` varchar(50) NOT NULL,
  `estado_imovel` varchar(35) NOT NULL,
  `cep_imovel` int(10) DEFAULT NULL,
  `descricao_imovel` text,
  `img1` varchar(150) NOT NULL,
  `img2` varchar(150) DEFAULT NULL,
  `img3` varchar(150) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lido` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
