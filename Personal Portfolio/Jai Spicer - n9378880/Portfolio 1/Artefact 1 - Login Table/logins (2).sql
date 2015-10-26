-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2015 at 05:14 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ifb299db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `UserLevel` enum('Migrant','Volunteer','Manager','Admin') NOT NULL,
  `Approved` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`ID`, `FirstName`, `LastName`, `Username`, `Password`, `Email`, `PhoneNumber`, `Address`, `UserLevel`, `Approved`) VALUES
(1, 'berb', 'nippleson', 'bignip', '4pi', 'berbnipplesone@pornhub.cum', '1800', '11 just 11', 'Migrant', 1),
(2, 'Ibrahim', 'Alharbi', 'ibrahim', '123456', 'ib@gmail.com', '2147483647', '123456', 'Migrant', 1),
(3, 'aaaa', 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaaa', '0', 'aaaaa', 'Migrant', 1),
(4, 'luke', 'kane', 'luke', 'password1', 'luke@test.com', '0404112233', '1 Brisbane Rd, Brisbane QLD 4000', 'Volunteer', 1),
(5, 'Jai', 'Spicer', 'jaispicer', 'password', 'jaispicer@mail.com', '101010101', '12 Lane', 'Admin', 1),
(6, 'blahblah', 'blahblah', 'blahblahblah', 'password', 'blah@blahblah.com', '404070407', '1 Brisbane St Brisbane.', 'Migrant', 1),
(7, 'Kirwan', 'Elmsly', 'Kirwan', 'abc123', 'kirwan.Elmsly@gmail.com', '12345678', '55 Fake Street', 'Migrant', 1),
(8, 'test name', 'test last name', 'testuser1', 'password', 'test@test.com.au', '404040405', '1 Blah St Brisbane', 'Migrant', 1),
(9, 'l', 'l', 'l', 'l', 'l', '0', 'l', 'Migrant', 1),
(10, 'Volunteer1', 'v1', 'volunteer1', 'password', 'blahblah@test.com.au', '0', '', 'Volunteer', 1),
(113, 'Yardley', 'Whitfield', '100', 'QID58YKY2FZ', 'pede@antedictumcursus.org', '0320076703', 'P.O. Box 565, 1772 Non, Street', 'Migrant', 1),
(114, 'Vivien', 'Alford', '101', 'ZIB58KDE5QB', 'dignissim.lacus.Aliquam@urnaUttincidunt.ca', '0245596249', '682-2371 Dui. Av.', 'Migrant', 1),
(115, 'Vincent', 'Mclaughlin', '102', 'SBM67LKP9FX', 'ante.ipsum.primis@vulputateullamcorpermagna.edu', '0149282834', '6330 Enim. Rd.', 'Migrant', 1),
(116, 'Felix', 'Bray', '103', 'PVR31RWZ3SW', 'ultrices.iaculis@aliquam.ca', '0315968655', 'P.O. Box 422, 6220 Ipsum. Avenue', 'Migrant', 1),
(117, 'Summer', 'White', '104', 'BFU55EIU1BP', 'congue.a.aliquet@sedsem.ca', '0986767631', 'P.O. Box 483, 9494 Orci St.', 'Migrant', 1),
(118, 'Caesar', 'Newton', '105', 'KVT17FJI6LC', 'sociis.natoque@risus.org', '0937053680', '6215 Phasellus Avenue', 'Migrant', 1),
(119, 'Alfonso', 'Snow', '106', 'MVT84IUL7PE', 'lacus.Ut.nec@accumsansedfacilisis.com', '0361502472', 'P.O. Box 689, 1349 Etiam Rd.', 'Migrant', 1),
(120, 'Benjamin', 'Ferrell', '107', 'FAM45QWB0CU', 'facilisis.vitae.orci@mus.edu', '0603131247', 'Ap #996-9484 Quis Rd.', 'Migrant', 1),
(121, 'Yeo', 'Hampton', '108', 'ECC82EIC1OO', 'Donec@convallisdolor.net', '0585075996', 'Ap #417-8920 Lobortis Road', 'Migrant', 1),
(122, 'Austin', 'Sweet', '109', 'HQU08EUT5SI', 'vitae.erat.vel@dolorFusce.net', '0869338503', 'P.O. Box 479, 7573 Eu Road', 'Migrant', 1),
(123, 'Jorden', 'Blevins', '110', 'ZZQ16DMY2US', 'diam.Sed@tristiqueaceleifend.com', '0240439946', 'P.O. Box 528, 1773 Porttitor St.', 'Migrant', 1),
(124, 'Virginia', 'Donaldson', '111', 'LOX23OBZ4JM', 'nulla@uterat.ca', '0578692128', '1312 Elit, St.', 'Migrant', 1),
(125, 'Natalie', 'Mccray', '112', 'YRY76HBI4IL', 'sociis@nuncsitamet.org', '0160973378', '323-2603 Cursus Rd.', 'Migrant', 1),
(126, 'Garrison', 'Mcconnell', '113', 'APY08NTJ9RW', 'mauris@quamPellentesque.ca', '0700072778', 'P.O. Box 338, 8209 Lacus. St.', 'Migrant', 1),
(127, 'Leandra', 'Rutledge', '114', 'JOY17KPU0IN', 'consectetuer.adipiscing.elit@Nam.com', '0682477659', '2721 Ipsum. Ave', 'Migrant', 1),
(128, 'Zachary', 'Warner', '115', 'GVM33RCX9ZS', 'purus.ac.tellus@Suspendisseseddolor.ca', '0283074769', '2463 Tristique Rd.', 'Migrant', 1),
(129, 'Reese', 'Bell', '116', 'DHQ49EON3EB', 'pede@iaculisodioNam.net', '0641443423', 'Ap #835-5826 Vitae Street', 'Migrant', 1),
(130, 'Abigail', 'Steele', '117', 'AMO21PGY6GF', 'Donec.non@mollisPhasellus.co.uk', '0680907246', '384-431 Tincidunt Street', 'Migrant', 1),
(131, 'Talon', 'Hicks', '118', 'YRL60RBT9AK', 'sodales.elit@vitae.net', '0888116226', 'Ap #225-7578 Fusce St.', 'Migrant', 1),
(132, 'Nathan', 'Carney', '119', 'VYQ72CML6NG', 'at.augue.id@mauris.edu', '0142145517', 'Ap #747-2252 Massa. St.', 'Migrant', 1),
(133, 'Kareem', 'Munoz', '120', 'QLO43TKV5TI', 'lorem@rutrumnon.co.uk', '0842172783', '9912 Vitae Rd.', 'Migrant', 1),
(134, 'Wylie', 'Bailey', '121', 'FNL36WFX9EK', 'euismod@Phasellusvitaemauris.ca', '0402482085', '747-4857 Quis, Av.', 'Migrant', 1),
(135, 'Anjolie', 'Holcomb', '122', 'KNB79MVO2GL', 'mattis.ornare@dolorNulla.org', '0891165517', '716 Nulla St.', 'Migrant', 1),
(136, 'Murphy', 'Ayers', '123', 'RQF87EFC9CA', 'Nullam.nisl@tempus.com', '0230383545', 'P.O. Box 448, 1278 Aliquam Ave', 'Migrant', 1),
(137, 'Uriel', 'Marshall', '124', 'CCW43FOW4JX', 'sed.sapien.Nunc@etlibero.net', '0708451473', 'P.O. Box 158, 4277 Pede. Rd.', 'Migrant', 1),
(138, 'Upton', 'Potts', '125', 'JFL06VIC5MH', 'velit.Cras.lorem@eget.co.uk', '0249111685', 'P.O. Box 412, 4955 Nibh. Ave', 'Migrant', 1),
(139, 'Burke', 'Walter', '126', 'HUW39YZX4QQ', 'enim.sit.amet@sodalespurus.com', '0362850928', '2638 Amet, Road', 'Migrant', 1),
(140, 'Veda', 'Whitehead', '127', 'RVZ82RDB2RH', 'nisl.arcu.iaculis@volutpatNulladignissim.edu', '0835299152', 'P.O. Box 234, 4569 Vitae Rd.', 'Migrant', 1),
(141, 'Galvin', 'Ashley', '128', 'BYP72BAH7XZ', 'at@volutpatNullafacilisis.com', '0254189725', '8974 Enim Road', 'Migrant', 1),
(142, 'Brody', 'Leach', '129', 'JLK56JCI7RD', 'Curabitur.vel.lectus@sit.co.uk', '0297166395', '603-9003 Erat Avenue', 'Migrant', 1),
(143, 'Amery', 'Craft', '130', 'VJG00QET6BV', 'tincidunt.pede@euismodestarcu.ca', '0982682867', 'Ap #372-2586 Consectetuer Rd.', 'Migrant', 1),
(144, 'Lenore', 'Allison', '131', 'BQW06HTT3YY', 'rutrum@semperegestas.edu', '0992735685', 'P.O. Box 534, 3448 Pede. Rd.', 'Migrant', 1),
(145, 'Conan', 'Acevedo', '132', 'QXO72KCO4WJ', 'nonummy@ametornarelectus.net', '0766011769', 'P.O. Box 915, 9978 Dis Rd.', 'Migrant', 1),
(146, 'Cole', 'Chen', '133', 'OIB08CFD4JJ', 'vel.convallis@justo.edu', '0105439159', 'Ap #903-3485 Est. Avenue', 'Migrant', 1),
(147, 'Gisela', 'Erickson', '134', 'DCC77NVE6SL', 'gravida@dictumeu.co.uk', '0388247654', 'P.O. Box 722, 7594 A Road', 'Migrant', 1),
(148, 'Claire', 'Banks', '135', 'CIE88UJR2WW', 'sit@eratSednunc.com', '0328958318', 'P.O. Box 759, 5657 Nulla Av.', 'Migrant', 1),
(149, 'Gavin', 'Richard', '136', 'LDU03VHF6VJ', 'risus.Duis.a@senectusetnetus.co.uk', '0760197743', 'P.O. Box 237, 571 Ut, Ave', 'Migrant', 1),
(150, 'Tyler', 'Woodard', '137', 'VDI54AAZ4CB', 'venenatis@sedestNunc.org', '0157553909', 'Ap #908-2077 Risus. St.', 'Migrant', 1),
(151, 'Stephen', 'Ellis', '138', 'EAD28JEK5RK', 'aliquet.odio.Etiam@sit.org', '0217622541', '8649 Laoreet Rd.', 'Migrant', 1),
(152, 'Katell', 'Hendricks', '139', 'MSW01OGQ7AG', 'blandit.enim@etmagnis.org', '0836326640', 'P.O. Box 991, 7320 Ipsum Street', 'Migrant', 1),
(153, 'September', 'Murphy', '140', 'YPL27JNI9TY', 'adipiscing.non@aliquetPhasellus.org', '0259000853', 'Ap #431-7868 Elementum, Street', 'Migrant', 1),
(154, 'Damon', 'Rogers', '141', 'ATC04RXB1JJ', 'semper@Cras.net', '0412393968', 'Ap #409-9416 Enim. Street', 'Migrant', 1),
(155, 'Rana', 'Chang', '142', 'NUD83JZA6VO', 'Sed.eget@dolordolor.edu', '0648381202', '3736 Ornare St.', 'Migrant', 1),
(156, 'Penelope', 'Mcgee', '143', 'IPH83JSW4CT', 'diam@vulputatelacusCras.edu', '0667319207', '632-5660 Luctus Avenue', 'Migrant', 1),
(157, 'September', 'Coffey', '144', 'YXW96UTN7MF', 'Cum@odioapurus.org', '0778255835', 'Ap #432-1142 Facilisis St.', 'Migrant', 1),
(158, 'Isaiah', 'Mccarty', '145', 'HTQ40JOX8EC', 'natoque.penatibus@eu.com', '0839652174', '7294 Non Rd.', 'Migrant', 1),
(159, 'Logan', 'Christian', '146', 'OAP89FYL8GM', 'ante.blandit@sit.org', '0821602258', '942-7853 Nulla Av.', 'Migrant', 1),
(160, 'Carter', 'Bennett', '147', 'OBU98JCU0DY', 'vitae@facilisiseget.ca', '0370508473', '2542 Amet Rd.', 'Migrant', 1),
(161, 'Colette', 'Fitzgerald', '148', 'RZN95ZXP9HA', 'libero.Integer.in@uterat.com', '0471980611', '285-4183 Purus. Rd.', 'Migrant', 1),
(162, 'Harper', 'Rodriguez', '149', 'NED07NLU0YY', 'libero.Donec@sem.com', '0107979853', 'P.O. Box 253, 6466 Eros Av.', 'Migrant', 1),
(163, 'Abraham', 'Robbins', '150', 'JHF25WWV0LQ', 'commodo.ipsum@egetmagnaSuspendisse.com', '0844960469', 'Ap #830-9207 Sit Rd.', 'Migrant', 1),
(164, 'Audra', 'Romero', '151', 'URN44UTD0TC', 'semper@anteVivamusnon.org', '0546175466', 'P.O. Box 509, 8046 Velit. Rd.', 'Migrant', 1),
(165, 'Dana', 'Conner', '152', 'VGW66ZQY6SL', 'mi@leo.co.uk', '0711725776', '1273 Eu Avenue', 'Migrant', 1),
(166, 'Jayme', 'Galloway', '153', 'NXE35AQG9AP', 'vulputate@ultrices.ca', '0621923476', 'P.O. Box 230, 9624 Euismod Ave', 'Migrant', 1),
(167, 'Raymond', 'Harmon', '154', 'JZM16CPB4RK', 'imperdiet@nequesed.org', '0372096015', 'Ap #134-1300 Blandit Avenue', 'Migrant', 1),
(168, 'Jocelyn', 'Burt', '155', 'FTY12DVM6BM', 'tincidunt@elit.net', '0704328788', '698 Malesuada Rd.', 'Migrant', 1),
(169, 'Ariana', 'Vance', '156', 'ZUO81TTZ0FX', 'nunc.sed.pede@gravidanunc.co.uk', '0721043796', '860-9868 At Avenue', 'Migrant', 1),
(170, 'Blossom', 'Hardin', '157', 'BFS56PJM7IX', 'Suspendisse.tristique@eratsemper.co.uk', '0524915161', 'P.O. Box 860, 395 Malesuada Avenue', 'Migrant', 1),
(171, 'Idola', 'Bates', '158', 'SWJ37SYK6PS', 'Mauris@doloregestasrhoncus.com', '0792742050', '427-1311 At Street', 'Migrant', 1),
(172, 'Keefe', 'House', '159', 'FTL23JFB9HA', 'penatibus.et@tristique.com', '0733735271', 'Ap #229-7736 Nisi. Rd.', 'Migrant', 1),
(173, 'Willow', 'Pearson', '160', 'IWC64OYO3QW', 'velit.egestas@Sed.net', '0809304864', '266-1564 Amet St.', 'Migrant', 1),
(174, 'Hoyt', 'Moon', '161', 'ONQ69XGC8NZ', 'ullamcorper@enim.org', '0487119495', 'P.O. Box 679, 8535 Nibh St.', 'Migrant', 1),
(175, 'Walter', 'Peterson', '162', 'QZM46ZLU0BQ', 'pede.ac@velconvallisin.org', '0449324700', 'Ap #427-8004 Pellentesque Rd.', 'Migrant', 1),
(176, 'Chantale', 'Mason', '163', 'QGT57DPQ3HG', 'neque.Morbi.quis@Vivamus.co.uk', '0130633830', 'P.O. Box 937, 649 Est. St.', 'Migrant', 1),
(177, 'Jamal', 'Singleton', '164', 'UMF19CYD2VS', 'enim.gravida.sit@dui.com', '0129623703', 'P.O. Box 582, 3235 Non, Av.', 'Migrant', 1),
(178, 'Tucker', 'Mason', '165', 'IYB35XEN2QK', 'amet.consectetuer.adipiscing@a.co.uk', '0455642458', 'P.O. Box 492, 979 Inceptos Avenue', 'Migrant', 1),
(179, 'Basia', 'Harvey', '166', 'BZA49TYG6ST', 'cursus.et.eros@tristiquepharetraQuisque.co.uk', '0987540842', 'P.O. Box 502, 1117 Mattis St.', 'Migrant', 1),
(180, 'Patricia', 'Curtis', '167', 'CUO40KSM3CT', 'urna.suscipit@Utsemper.net', '0465570244', 'P.O. Box 589, 6433 Sociis St.', 'Migrant', 1),
(181, 'Basil', 'Head', '168', 'BWF12IOV3AO', 'id.risus.quis@diamProin.ca', '0932196489', '2527 Pede, St.', 'Migrant', 1),
(182, 'Odysseus', 'Rowe', '169', 'KLQ69AXH4FV', 'Sed@liberoProin.edu', '0916856955', 'Ap #291-5852 Lacus, Ave', 'Migrant', 1),
(183, 'Yvonne', 'Justice', '170', 'BNM43OVC7MU', 'mattis.ornare@Phasellus.edu', '0689465243', '7162 Luctus Avenue', 'Migrant', 1),
(184, 'Marny', 'Erickson', '171', 'HRM96OVL6MR', 'elit.Aliquam@sit.com', '0705921508', '673-4678 Non, Av.', 'Migrant', 1),
(185, 'Levi', 'Lee', '172', 'NAD56HHG4PH', 'venenatis.lacus@ametrisusDonec.ca', '0484777106', 'Ap #373-5057 Magna Rd.', 'Migrant', 1),
(186, 'Declan', 'Hobbs', '173', 'WGM76QIR8YU', 'consectetuer.adipiscing.elit@nuncinterdum.com', '0725320400', '1762 Mauris St.', 'Migrant', 1),
(187, 'Clark', 'Woods', '174', 'SFS46RIG3SA', 'id.erat.Etiam@consectetueradipiscing.edu', '0434007268', 'Ap #463-9623 Eu, Road', 'Migrant', 1),
(188, 'Cameran', 'Garcia', '175', 'OHB10AWG4MO', 'eleifend@nec.ca', '0272590461', 'P.O. Box 429, 9235 Eu, St.', 'Migrant', 1),
(189, 'Fuller', 'Bowen', '176', 'SXN29FNF5RK', 'id.blandit.at@fringilla.co.uk', '0296268743', 'Ap #499-6959 Libero Ave', 'Migrant', 1),
(190, 'Murphy', 'Fulton', '177', 'YQZ90DQV9NN', 'Cum.sociis.natoque@dui.com', '0687137172', '5437 Dolor. St.', 'Migrant', 1),
(191, 'Jenna', 'Fry', '178', 'BVJ91XQM7PA', 'velit.Sed@auctorMauris.co.uk', '0144036640', '2596 Turpis Avenue', 'Migrant', 1),
(192, 'Garrison', 'Rutledge', '179', 'CCV86EUQ4WH', 'eu@ametloremsemper.edu', '0869333304', 'Ap #864-2110 Mauris, Ave', 'Migrant', 1),
(193, 'Ian', 'Lang', '180', 'SYP39ZBK7AS', 'mattis.ornare.lectus@lobortis.com', '0987838609', 'Ap #694-3581 Sapien Rd.', 'Migrant', 1),
(194, 'Fallon', 'Murray', '181', 'ZWG05EGE3GP', 'Sed.malesuada.augue@apurus.co.uk', '0204097670', '4443 Mollis. Avenue', 'Migrant', 1),
(195, 'Haley', 'Berger', '182', 'BIR41GJT3LK', 'montes.nascetur.ridiculus@a.co.uk', '0531100160', '1306 Duis Road', 'Migrant', 1),
(196, 'Velma', 'Pennington', '183', 'UAK75CWY1QP', 'nec.cursus.a@massaInteger.com', '0336776019', 'Ap #270-5895 Amet, Rd.', 'Migrant', 1),
(197, 'Carol', 'Doyle', '184', 'IJV58TKV9FQ', 'morbi.tristique@posuereenim.co.uk', '0223913702', 'P.O. Box 634, 2841 Phasellus Av.', 'Migrant', 1),
(198, 'Baxter', 'Shepard', '185', 'IRE19KQE1LS', 'vel.venenatis.vel@lorem.org', '0268830075', '247-3206 Eget Avenue', 'Migrant', 1),
(199, 'Amelia', 'Malone', '186', 'BPO50LZG3DJ', 'dolor@convalliserat.net', '0882600306', '3698 Massa Road', 'Migrant', 1),
(200, 'Kiara', 'Reed', '187', 'RNP83HUL3WL', 'Nunc@mauriserateget.co.uk', '0946538707', 'P.O. Box 341, 291 Aliquet. Av.', 'Migrant', 1),
(201, 'Len', 'Booth', '188', 'FXP67VAZ8BP', 'et.commodo@sempertellus.org', '0218500464', '2558 Elit, Ave', 'Migrant', 1),
(202, 'Christen', 'Best', '189', 'SUQ76EXN9AA', 'elit@aauctornon.net', '0629766689', '550-6286 Sodales. Avenue', 'Migrant', 1),
(203, 'Tamara', 'Beck', '190', 'DTF37SEP7IS', 'nec.cursus@natoque.edu', '0984243490', '263 Sollicitudin Ave', 'Migrant', 1),
(204, 'Colby', 'Mckay', '191', 'UVQ83WOD2IO', 'a.arcu@et.edu', '0279232457', 'P.O. Box 966, 3425 Aliquet Road', 'Migrant', 1),
(205, 'Bruno', 'Conrad', '192', 'OXA13BEN3AS', 'sit.amet.risus@eu.co.uk', '0883646623', 'Ap #432-5957 Donec St.', 'Migrant', 1),
(206, 'MacKenzie', 'Sweet', '193', 'PNP12MNC4TG', 'arcu.Vivamus@vehicula.ca', '0718441594', '980-4353 Sem, Rd.', 'Migrant', 1),
(207, 'Autumn', 'Bridges', '194', 'NHD93QTP2MT', 'Nunc.ut.erat@faucibusidlibero.org', '0230728855', 'P.O. Box 798, 4776 Eu, Rd.', 'Migrant', 1),
(208, 'Seth', 'Reynolds', '195', 'DZX64OCP3JA', 'diam.at.pretium@porttitorvulputateposuere.edu', '0417687673', 'P.O. Box 804, 5033 Auctor Road', 'Migrant', 1),
(209, 'Kalia', 'Saunders', '196', 'PMR35OEJ5RT', 'luctus@Crasdictumultricies.com', '0973703762', '584-3667 Risus. Road', 'Migrant', 1),
(210, 'Murphy', 'Clemons', '197', 'HKQ36TUP1JB', 'et.magnis@semut.org', '0193085278', 'P.O. Box 804, 3438 Litora Street', 'Migrant', 1),
(211, 'Clinton', 'Reeves', '198', 'BFZ43ECH2XH', 'sed.pede.nec@ultrices.edu', '0413630906', '834-2088 Ut Rd.', 'Migrant', 1),
(212, 'Rajah', 'Reed', '199', 'LET79IYD3EV', 'semper.dui@fringilla.net', '0400065304', 'P.O. Box 566, 4128 Duis Road', 'Migrant', 1),
(220, 'Malcolm', 'Tutor', 'malcolm', 'malcolm', 'malcolm@test.com', '0404040404', '1 Brisbane St Brisbane QLD 4000', 'Admin', 1),
(221, 'migrant', 'migrant', 'migrant', 'password1', 'migrant@migrant.com', '0404040404', '1 Brisbane St Brisbane QLD 4000', 'Migrant', 1),
(222, 'vol', 'vol', 'vol', 'password1', 'vol@test.com', '0404040404', '1 Brisbane St Brisbane QLD 4000', 'Volunteer', 1),
(223, 'manager', 'manager', 'manager', 'password1', 'manager@test.com', '0404040404', '1 Brisbane St Brisbane QLD 4000', 'Manager', 1),
(224, 'admin', 'admin', 'admin', 'password1', 'admin@test.com', '0404040404', '1 Brisbane St Brisbane QLD 4000', 'Admin', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
