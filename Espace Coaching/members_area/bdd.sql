-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 25 Janvier 2014 à 16:11
-- Version du serveur: 5.5.9
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `Espace_Coaching_Connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) NOT NULL,
  `valide` tinyint(4) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `texte` text CHARACTER SET utf8 NOT NULL,
  `lien_photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_creation` date NOT NULL,
  `note` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` VALUES(3, 14, 1, '', 'Les bienfaits du brocolis', 'Enculé', '', '2013-11-04', 0);
INSERT INTO `article` VALUES(6, 10, 0, '', 'KKKaaaaaa', 'Yoooooooooooo             iejfzejfzeofjzopfjzepfzejfpeozfzefzfzzadazdazadazdazdazdzdazdazdazdzad', '', '2013-11-04', 0);
INSERT INTO `article` VALUES(7, 10, 1, '', 'aaaaaaaaaaaaaa', 'jeofjazofpajzfopazfja', '', '2013-11-06', 0);
INSERT INTO `article` VALUES(8, 10, 1, '', 'De Gau2le', 'J''descend au Ritz, tu baises ta grosse Ã  l''hÃ´tel Ibis', '', '2013-11-06', 0);
INSERT INTO `article` VALUES(9, 15, 0, '', 'Brocolis et tribulations', 'Brocolis ou banane il faut choisir. Pour mieux piner votre petite cousine je choisirais Ã  votre place le brocolis. Riche en fibre et en anti oxydant, il est essentiel pour garder une forme de fer! )              ', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(10, 15, 0, '', 'zhizhdoiazhdioazdhaziodhazd', 'zhdizlkdnzdizahdioazdhiozdhzoidhzdihazdioazhdiozahdaziodhaziodhazidhazdilkazndjkaznfklzafnzajkfbzajkfbzajkfbazjkfbzafjkazbfjkazbfljazbfalzkfbazljfbzajfbzjfbqsd,nbsajbazlidjmkdhnazlkbfazjfbazjkfabzfklzabnfazfafazfz', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(11, 15, 0, '', 'zhizhdoiazhdioazdhaziodhazd', 'zhdizlkdnzdizahdioazdhiozdhzoidhzdihazdioazhdiozahdaziodhaziodhazidhazdilkazndjkaznfklzafnzajkfbzajkfbzajkfbazjkfbzafjkazbfjkazbfljazbfalzkfbazljfbzajfbzjfbqsd,nbsajbazlidjmkdhnazlkbfazjfbazjkfabzfklzabnfazfafazfz', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(12, 15, 0, '', 'MAaaaaaaaaaaa', 'fhazoihaziozhfoiahfazlfaijaiouhgziuefhiuefgaizfgaizlugfhuzaggqzgefleiugfliuqqhezifuehzlfiuqhefuihqhfiezhfuizhflqiuhfleuqizhfqliuzefhhuffhuzqqhiulzefhilufquhlifeqhuilqhuilfhufiqhuiefqhiuzfuhhufhufzqeqheuhufzqehuifhiufezqhiuqzefiuhfqzehui', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(14, 15, 1, 'boxe', 'MAaaaaaaaaaaa', 'fhazoihaziozhfoiahfazlfaijaiouhgziuefhiuefgaizfgaizlugfhuzaggqzgefleiugfliuqqhezifuehzlfiuqhefuihqhfiezhfuizhflqiuhfleuqizhfqliuzefhhuffhuzqqhiulzefhilufquhlifeqhuilqhuilfhufiqhuiefqhiuzfuhhufhufzqeqheuhufzqehuifhiufezqhiuqzefiuhfqzehui', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(15, 15, 1, 'boxe', 'MAaaaaaaaaaaa', 'fhazoihaziozhfoiahfazlfaijaiouhgziuefhiuefgaizfgaizlugfhuzaggqzgefleiugfliuqqhezifuehzlfiuqhefuihqhfiezhfuizhflqiuhfleuqizhfqliuzefhhuffhuzqqhiulzefhilufquhlifeqhuilqhuilfhufiqhuiefqhiuzfuhhufhufzqeqheuhufzqehuifhiufezqhiuqzefiuhfqzehui', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(16, 15, 1, 'boxe', 'MAaaaaaaaaaaa', 'fhazoihaziozhfoiahfazlfaijaiouhgziuefhiuefgaizfgaizlugfhuzaggqzgefleiugfliuqqhezifuehzlfiuqhefuihqhfiezhfuizhflqiuhfleuqizhfqliuzefhhuffhuzqqhiulzefhilufquhlifeqhuilqhuilfhufiqhuiefqhiuzfuhhufhufzqeqheuhufzqehuifhiufezqhiuqzefiuhfqzehui', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(17, 15, 1, 'boxe', 'zkdozakdopzakjdozadkzaopda', '                    zojdazjdopzjdaopdjapozjadpaojdpzoajdpozajdzaopdjapodjzadpojzadpojzadjopzadzpjodazjpodazjopdazjopdazojpdjazpojopdzajopdzjopdzajdozpazdopjadjopzadzoajpdzjopadazjodzopjazdjoazdjopdzajopdazjopdazjopdazopjdzaojpdazjopdzaojpdzajopdzaojdazojpzdaopjdzaopjd', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(18, 15, 1, 'boxe', 'zkdozakdopzakjdozadkzaopda', '                    zojdazjdopzjdaopdjapozjadpaojdpzoajdpozajdzaopdjapodjzadpojzadpojzadjopzadzpjodazjpodazjopdazjopdazojpdjazpojopdzajopdzjopdzajdozpazdopjadjopzadzoajpdzjopadazjodzopjazdjoazdjopdzajopdazjopdazjopdazopjdzaojpdazjopdzaojpdzajopdzaojdazojpzdaopjdzaopjd', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(20, 15, 1, 'boxe', 'Blanche Neie', '                    fzaaozjfopzafjzaopfjafpozaÃ¹jfpozajfÃ¹zaojfzpofjzafa', 'http://localhost/Images/Images_articles/article_20', '2013-11-07', 0);
INSERT INTO `article` VALUES(21, 15, 1, 'boxe', 'Blanche Neie', '                    fzaaozjfopzafjzaopfjafpozaÃ¹jfpozajfÃ¹zaojfzpofjzafa', 'http://localhost/Images/Images_articles/article_21', '2013-11-07', 0);
INSERT INTO `article` VALUES(22, 10, 0, '', 'Maaaaaaaaaaa', '                    ojfpejfepofjepofjafopzzzzzzzzzzzziazhfiazhfiozahfazmifhqziefhqizmoefhuhfqeksfheofzhiefizqhqefijzfqeijzqefijz', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(23, 10, 0, '', 'Maaaaaaaaaaa', '                    ojfpejfepofjepofjafopzzzzzzzzzzzziazhfiazhfiozahfazmifhqziefhqizmoefhuhfqeksfheofzhiefizqhqefijzfqeijzqefijz', '', '2013-11-07', 0);
INSERT INTO `article` VALUES(24, 15, 0, '', 'zdzada', '                    zadzdazdza', 'http://localhost/Images/Images_articles/article_24', '2013-11-07', 0);
INSERT INTO `article` VALUES(25, 15, 1, 'boxe', 'zffzajopazfa', 'zafpzkfpazk^pazfkazf', 'http://localhost/Images/Images_articles/article_25', '2013-11-07', 0);
INSERT INTO `article` VALUES(26, 15, 0, '', 'zfazafpazÃ§', '                    fazfioazfhaziofhofziahfz', 'http://localhost/members_area/Images/Images_articles/article_26', '2013-11-07', 0);
INSERT INTO `article` VALUES(27, 15, 1, 'boxe', 'zopzajfpoazjf', '                    zfjaozfjazopfjazopfjazfpojazfpoazjfazjmfozajfoazifjaz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(29, 15, 1, 'boxe', 'zopzajfpoazjf', '                    zfjaozfjazopfjazopfjazfpojazfpoazjfazjmfozajfoazifjaz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(30, 15, 1, 'boxe', 'ezgezgzg', '                    eezgezgezgezgzegzegezg', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(31, 15, 0, '', 'jdioazjdpazdjazd', '                    hzfiouefzehfzeqhlfezqhlfzehqlfzehlqhqefuzlhqefuzehfuzqhuqefzhlefzqjlhqefzhjeflqzhlqefzhlefzqfhluzqezqefhuleqzfhluqezfhuuhefhuqfezhuqezfqefhuzefhzqlzqeflfqehlzfqezhuifzqeilhezfhzqeoiufhqzeofhqzeofhqzeiofhqeofhqzefoqhzefiqozehfqzehfqehfikjnfkleqjdojz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(32, 15, 1, 'boxe', 'jdioazjdpazdjazd', '                    hzfiouefzehfzeqhlfezqhlfzehqlfzehlqhqefuzlhqefuzehfuzqhuqefzhlefzqjlhqefzhjeflqzhlqefzhlefzqfhluzqezqefhuleqzfhluqezfhuuhefhuqfezhuqezfqefhuzefhzqlzqeflfqehlzfqezhuifzqeilhezfhzqeoiufhqzeofhqzeofhqzeiofhqeofhqzefoqhzefiqozehfqzehfqehfikjnfkleqjdojz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(34, 15, 1, 'boxe', 'zadazddazd', '                    dzadzaazdazdadz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(35, 15, 1, 'boxe', 'zadazddazd', '                    dzadzaazdazdadz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(36, 15, 1, 'boxe', 'zadazddazd', '                    dzadzaazdazdadz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(37, 15, 0, '', 'zaazda', '                    zaazdazdazd', 'http://localhost/members_area/Images/Images_articles/article_37', '2013-11-08', 0);
INSERT INTO `article` VALUES(38, 15, 0, '', 'zaazda', '                    zaazdazdazdrÃ©r&amp;r', 'http://localhost/members_area/Images/Images_articles/article_38', '2013-11-08', 0);
INSERT INTO `article` VALUES(39, 15, 0, '', 'zaazda', '                    zaazdazdazdrÃ©r&amp;r', 'http://localhost/members_area/Images/Images_articles/article_39.png', '2013-11-08', 0);
INSERT INTO `article` VALUES(40, 15, 0, '', 'iazzaropjaozp', '                    rizajrpazrjopazr', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(42, 15, 0, '', 'orzaorz', '                    irzarjzirijazarzioarzharuzharzrzhauarzuhilzilaruhrazuiharzuilhruiazlhariulzrahiuzlazrhulazrhuarhuaruhiuarz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(43, 15, 0, '', 'afzfa', '                    zfzafaz', '', '2013-11-08', 0);
INSERT INTO `article` VALUES(44, 15, 0, '', 'afzfa', '                    zfzafazÃ©Ã©', 'http://localhost/members_area/Images/Images_articles/article_44', '2013-11-08', 0);
INSERT INTO `article` VALUES(45, 15, 1, '', 'La banane', 'Et les petits enfants    ', 'http://localhost/members_area/Images/Images_articles/article_45', '2013-11-08', 0);
INSERT INTO `article` VALUES(46, 15, 1, '', 'efzjlfejeffj', 'zadziadzaiodjiajdoazjdzmdjldamjmzdjaz', 'http://localhost/members_area/Images/Images_articles/article_31', '2013-11-08', 0);
INSERT INTO `article` VALUES(47, 15, 1, '', 'jicijfqsjqj', '                    qisfjosiqjfpqosfjsqopfjsqpfojsqfqs', 'http://localhost/members_area/Images/Images_articles/article_47', '2013-11-09', 0);
INSERT INTO `article` VALUES(48, 15, 1, '', 'afaza', '                    aijzijoazjiofafjioaz', 'http://localhost/members_area/Images/Images_articles/article_48', '2013-11-09', 0);
INSERT INTO `article` VALUES(49, 15, 0, '', 'Brocolis', '                    hhiohiohomihefa', '', '2014-01-02', 0);
INSERT INTO `article` VALUES(50, 15, 1, 'boxe', 'Brocolis', '                    hhiohiohomihefa', 'http://localhost/members_area/Images/Images_articles/article_50', '2014-01-02', 0);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profil` tinyint(4) NOT NULL,
  `cover` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` VALUES(14, 0, 'http://localhost/members_area/media_users/photos_users_/photo2.png', 1, 0);
INSERT INTO `images` VALUES(15, 15, 'http://localhost/members_area/media_users/photos_users_15/photo2.png', 1, 0);
INSERT INTO `images` VALUES(16, 15, 'http://localhost/members_area/media_users/photos_users_15/photo2.png', 0, 1);
INSERT INTO `images` VALUES(17, 0, 'http://localhost/members_area/media_users/photos_users_/photo2.png', 0, 1);
INSERT INTO `images` VALUES(18, 47, 'http://localhost/members_area/media_users/photos_users_47/photo2.png', 0, 1);
INSERT INTO `images` VALUES(19, 48, 'http://localhost/members_area/media_users/photos_users_48/photo2.png', 1, 0);
INSERT INTO `images` VALUES(20, 48, 'http://localhost/members_area/media_users/photos_users_48/photo2.png', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` VALUES(1, 'Fitness');
INSERT INTO `tag` VALUES(2, 'Musculation');
INSERT INTO `tag` VALUES(3, 'Anabolisant');
INSERT INTO `tag` VALUES(4, 'Amphétamine');

-- --------------------------------------------------------

--
-- Structure de la table `tag_article`
--

CREATE TABLE `tag_article` (
  `tag_id` int(11) NOT NULL,
  `article_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tag_article`
--

INSERT INTO `tag_article` VALUES(1, 1);
INSERT INTO `tag_article` VALUES(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type_user` varchar(5) NOT NULL,
  `telephone` int(10) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `departement` tinyint(4) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `specialite1` varchar(255) NOT NULL,
  `specialite2` varchar(255) NOT NULL,
  `specialite3` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `citation` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `note` float NOT NULL,
  `signup_date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` VALUES(1, 'coucou', '', '', 'coucou', 'coucou@gmail.com', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 1379527806);
INSERT INTO `users` VALUES(2, 'ilan', '', '', 'monkeyhead', 'lenny.hov@gmail.com', '', 0, '', 91, '', '', '', '', '', '', '', '', '', '', 0, 1380025502);
INSERT INTO `users` VALUES(3, 'ilaan', '', '', 'coucou', 'lenny.hov@gmail.com', '', 0, '', 91, '', '', '', '', '', '', '', '', '', '', 0, 1380034998);
INSERT INTO `users` VALUES(4, 'ilann', '', '', 'taggle', 'lenny.hov@gmail.com', '', 0, '', 95, '', '', '', '', '', '', '', '', '', '', 11, 1380035316);
INSERT INTO `users` VALUES(5, 'ilon', '', 'taggle', 'momomo', 'lenny.hov@gmail.com', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 1380035866);
INSERT INTO `users` VALUES(6, 'nooon', '', 'siiiii', 'momomo', 'lenny.hov@gmail.com', '', 0, '1 rue de mon cul', 0, '', '', '', '', '', '', '', '', '', 'fafafaf', 0, 1380036035);
INSERT INTO `users` VALUES(7, 'breh', '', 'coucou', 'brehbreh', 'lenny.hov@gmail.com', '', 0, '00', 0, '', '', '', '', '', '', '', '		    			    feafea		    ', 'feafaf', '', 0, 1381744748);
INSERT INTO `users` VALUES(14, 'Gros PD', '', 'ISNARD', 'isnard', 'chrpplrp@gmail.com', 'coach', 2147483647, '7 rue de ta petite cousine', 94, 'TaRace', '94768', 'Fitnex', 'Musculation', 'Ettamere', '', '', 'f', 'fkfmqk', 'efkefm', 14, 0);
INSERT INTO `users` VALUES(10, 'Zbouby94', '', 'Charles', 'tamaman', 'chrlsisnard@gmail.com', '', 0, '55', 0, '', '', '', '', '', '', '0678985948', 'aznfklazfnklazfnazklfnazlknazfa', '', '', 0, 1383502431);
INSERT INTO `users` VALUES(15, 'Charles', '', 'ISNARD', 'isnard', 'charlesisnard@aol.fr', 'admin', 0, '00', 94, 'Thiais ', '94320', 'Musculation', 'Fitness', 'Boxe', '', 'YOYO', '		    	uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu		    ', 'La vÃ©ritÃ© sort de ta maman', 'BANANIA', 0, 19910290);
INSERT INTO `users` VALUES(16, 'Babelou', '', 'rachid', 'rachid', 'rachid@rachid.com', 'coach', 0, '', 95, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(17, 'fjiefziej', '', 'zejfzefej', 'efjzejfzofjz', 'fjzefjezlfjz', '', 0, '', 95, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(18, 'qskjshFQLKF', '', 'fihzefihz', 'hfiozefhiof', 'iahfaoifhiefh', 'coach', 0, '', 91, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(19, 'cha', '', 'aopzkaz', 'zeazj', '', '', 0, '', 94, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(20, 'chaaa', '', '', '', '', '', 0, '', 91, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(21, 'cheeiei', '', '', '', '', '', 0, '', 95, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(22, 'chheh', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(23, 'chaaaaaaaaa', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(24, 'chaaaaaaaaa', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(25, 'chacha', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(26, 'chaaaaaak', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', 0, 0);
INSERT INTO `users` VALUES(27, 'Ch', '', 'Isnard', '', '', '', 0, 'Rue de la paix', 91, 'foof', '', '', '', '', '', '', '', '', '', 19, 0);
INSERT INTO `users` VALUES(28, 'Chaaaa', '', 'zd', '', 'azdzdadzad', '', 0, 'zdzdazad', 93, '', '', '', '', '', '', '', '', '', '', 10, 0);
INSERT INTO `users` VALUES(29, 'Iloun', '', 'zadpj', 'ajzd', 'danzd', '', 0, 'zdnadlkazda', 5, '', '', '', '', '', '', '', '', '', '', 17, 0);
INSERT INTO `users` VALUES(30, 'ilun', '', '', '', '', '', 0, '', 5, '', '', '', '', '', '', '', '', '', '', 14, 0);
INSERT INTO `users` VALUES(31, 'Jul', '', '', '', '', '', 0, '', 94, '', '', '', '', '', '', '', '', '', '', 12, 0);
INSERT INTO `users` VALUES(32, 'azifaifaiozfnafjazf', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, 'eifjaopfjaopfjazpf', 0, 'ofjfpoajfzopaj', '09090', 'eifazhfioa', 'jejfzejf', 'jeofjzefop', '', 'fiazhfioazh', '		    nfazhfioazfhiofhzfioazhfoahifa', 'hazifhaiof', 'azfajfa', 0, 0);
INSERT INTO `users` VALUES(33, 'zifazhfih', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'zjfaifh', 'ejfiafh', 'jiefjoizjf', '', 'zhaozihf', 'zhfaofhazoifhzaiofhiofezahiof		    ', 'ehoifha', 'ezifzioef', 0, 0);
INSERT INTO `users` VALUES(34, 'zjdiazjopiazjhf', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'hiafhioha', 'ioefhzoifh', 'iezfiozh', '', 'fafh', 'ziefzeiofhzeiofhaeifoha		    ', 'ehfioahf', 'zeifiohf', 0, 2013);
INSERT INTO `users` VALUES(35, 'ojfazpojfp', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, 'eofzk', 0, 'THIAIS', '94320', 'fnaif', 'fiahfio', 'efja', '', 'ahzfiha', 'ezjfajfopazjfazjfopzojfa		    ', 'jziejfopaijf', 'jzejfopj', 0, 2013);
INSERT INTO `users` VALUES(36, 'Charles2', '', '', 'yoyoyo', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'zoj', 'eopfja', 'zejfopezjfopaj', '', 'azjfapofjf', 'ejfopajfopazjfopazjfoaznfkazfnazfnapozfjaofkjsnfks,ndmqz,dopaz		    ', 'ekfÃ¢z', 'foajf', 0, 2013);
INSERT INTO `users` VALUES(37, 'Charles2z', '', '', 'isnard', 'eiofjazfopja@kzk.com', '', 0, 'opefkpoekf', 0, 'akoefkzpfkakopekfopk', 'keopf', 'opefj', 'ef', 'zefzefjpo', '', 'fjoajfzpoa', 'iezfojazpofajzpaozjpzaojazofpzjoa		    ', 'eofjzp', 'eopj', 0, 2013);
INSERT INTO `users` VALUES(38, 'JUJUJUJU', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'efpzeofj', 'ezfpjpza', 'ojeopfjzp', '', 'zefpjfpeoaoajp', 'ozjefpozejfpzjf		    ', 'jezojgpoejf', 'ojeopfj', 0, 2013);
INSERT INTO `users` VALUES(39, 'JUJUJUJU1', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'efpzeofj', 'ezfpjpza', 'ojeopfjzp', '', 'zefpjfpeoaoajp', '		    zada', 'jezojgpoejf', 'ojeopfj', 0, 2013);
INSERT INTO `users` VALUES(40, 'JUJUJUJU2', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'azodkap', 'ajfpaojd', 'azpojpz', '', 'zapdpzodja', 'aopzdzpdjadjadadazda', 'pozeopfjazpd', 'azdadpaozd', 0, 2013);
INSERT INTO `users` VALUES(41, 'Ilan1', '', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'oihf', 'jafpj', 'zjfpojzef', '', 'pazodjpd', 'zjfajfpajp		    ', 'oazjfpazjfpfo', 'oapzjfopazjf', 0, 2013);
INSERT INTO `users` VALUES(42, 'Charles2ZC3PO', 'AZPFOJP', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'zpafz', 'efazfp', 'pazjfpoazfj', '', 'aopzefjaopfj', 'zfpojopazjfpozfj		    ', 'opzefjaopfj', 'oezfjpjef', 0, 2013);
INSERT INTO `users` VALUES(43, 'IlanZ3PO', 'zaofjaoj', '', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'ojazopfj', 'oezjfopazefj', 'jopefjpoaef', '', 'fmakzf', '		    zapfazfiazjpazfjazopjazf', 'opejkfopaj', 'oajefpo', 0, 2013);
INSERT INTO `users` VALUES(44, 'IlanZ3PO2', 'zaofjaoj', 'Illaaaaaaaan', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'ojazopfj', 'oezjfopazefj', 'jopefjpoaef', '', 'fmakzf', '		    ', 'opejkfopaj', 'oajefpo', 0, 2013);
INSERT INTO `users` VALUES(45, 'tadada', 'ejfopaj', 'jzefojaefopj', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'fiahj', 'zjefoja', 'jzoefjopzefj', 'www.youjizz.com', 'jaeofja', 'foajfopajfpoj		    ', 'zefopjf', 'zjefjzef', 0, 2013);
INSERT INTO `users` VALUES(46, 'opfjapfo', 'oaefjopajfap', 'aojfopzfjapo', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 2, 'THIAIS', '94320', 'Prout', 'prout', 'PROUT', 'www.youjizz.com', '', '		    zoazjfpoafj', 'azjopzajd', 'zodajpdo', 0, 2013);
INSERT INTO `users` VALUES(47, 'Rachid', 'Mouloud', 'Omar', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'ajopzi', 'ejf', 'ejfpajf', 'www.youjizz.com', 'zzafazf', 'jazjfpazjfaopzfjopajopfajofazpjofazjoifaijoafzjiofaziojfzaiohjqfzofqmoifjfhiozhiozaqmqhiozhioqfzhiofzqihofzqhiofzaiohfazioa		    ', 'afzafa', 'azfaf', 0, 2013);
INSERT INTO `users` VALUES(48, 'Johnny ', 'bigoudi', 'bigoudi ', 'isnard', 'chrlsisnard@gmail.com', '', 0, '7 rue Gaston Lebeau', 0, 'THIAIS', '94320', 'jozefa', 'zefpo', 'jzeopfj', 'zejfopzejfpo', 'zefopj', 'zeopfj		    ', 'efpozjf', 'zeopfj', 20, 2013);

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE `vote` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `object_id` bigint(20) NOT NULL,
  `note` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `vote`
--

INSERT INTO `vote` VALUES(1, 'zjioadzdjiazzdajiodz', 1, 18, 0);
