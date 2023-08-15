-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 10:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries_names`
--

CREATE TABLE `countries_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `flagurl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries_names`
--

INSERT INTO `countries_names` (`id`, `name`, `currency`, `symbol`, `flagurl`, `created_at`, `updated_at`) VALUES
(1, 'Jordan', 'Jordanian dinar', 'د.ا', 'https://flagcdn.com/w320/jo.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(2, 'Northern Mariana Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/mp.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(3, 'Serbia', 'Serbian dinar', 'дин.', 'https://flagcdn.com/w320/rs.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(4, 'Andorra', 'Euro', '€', 'https://flagcdn.com/w320/ad.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(5, 'Turks and Caicos Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/tc.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(6, 'Bermuda', 'Bermudian dollar', '$', 'https://flagcdn.com/w320/bm.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(7, 'Bolivia', 'Bolivian boliviano', 'Bs.', 'https://flagcdn.com/w320/bo.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(8, 'Libya', 'Libyan dinar', 'ل.د', 'https://flagcdn.com/w320/ly.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(9, 'Mali', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/ml.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(10, 'Armenia', 'Armenian dram', '֏', 'https://flagcdn.com/w320/am.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(11, 'Mauritius', 'Mauritian rupee', '₨', 'https://flagcdn.com/w320/mu.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(12, 'Maldives', 'Maldivian rufiyaa', '.ރ', 'https://flagcdn.com/w320/mv.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(13, 'American Samoa', 'United States dollar', '$', 'https://flagcdn.com/w320/as.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(14, 'North Macedonia', 'denar', 'den', 'https://flagcdn.com/w320/mk.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(15, 'Ethiopia', 'Ethiopian birr', 'Br', 'https://flagcdn.com/w320/et.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(16, 'Greenland', 'krone', 'kr.', 'https://flagcdn.com/w320/gl.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(17, 'Iraq', 'Iraqi dinar', 'ع.د', 'https://flagcdn.com/w320/iq.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(18, 'Guatemala', 'Guatemalan quetzal', 'Q', 'https://flagcdn.com/w320/gt.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(19, 'Trinidad and Tobago', 'Trinidad and Tobago dollar', '$', 'https://flagcdn.com/w320/tt.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(20, 'Peru', 'Peruvian sol', 'S/ ', 'https://flagcdn.com/w320/pe.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(21, 'Suriname', 'Surinamese dollar', '$', 'https://flagcdn.com/w320/sr.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(22, 'Sweden', 'Swedish krona', 'kr', 'https://flagcdn.com/w320/se.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(23, 'New Caledonia', 'CFP franc', '₣', 'https://flagcdn.com/w320/nc.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(24, 'French Polynesia', 'CFP franc', '₣', 'https://flagcdn.com/w320/pf.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(25, 'Benin', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/bj.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(26, 'Estonia', 'Euro', '€', 'https://flagcdn.com/w320/ee.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(27, 'Falkland Islands', 'Falkland Islands pound', '£', 'https://flagcdn.com/w320/fk.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(28, 'Guam', 'United States dollar', '$', 'https://flagcdn.com/w320/gu.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(29, 'Zimbabwe', 'Zimbabwean dollar', '$', 'https://flagcdn.com/w320/zw.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(30, 'Slovakia', 'Euro', '€', 'https://flagcdn.com/w320/sk.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(31, 'Netherlands', 'Euro', '€', 'https://flagcdn.com/w320/nl.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(32, 'Ecuador', 'United States dollar', '$', 'https://flagcdn.com/w320/ec.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(33, 'Saudi Arabia', 'Saudi riyal', 'ر.س', 'https://flagcdn.com/w320/sa.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(34, 'United Arab Emirates', 'United Arab Emirates dirham', 'د.إ', 'https://flagcdn.com/w320/ae.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(35, 'Afghanistan', 'Afghan afghani', '؋', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/320px-Flag_of_the_Taliban.svg.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(36, 'United States Minor Outlying Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/um.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(37, 'Central African Republic', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/cf.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(38, 'Panama', 'Panamanian balboa', 'B/.', 'https://flagcdn.com/w320/pa.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(39, 'Vatican City', 'Euro', '€', 'https://flagcdn.com/w320/va.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(40, 'Syria', 'Syrian pound', '£', 'https://flagcdn.com/w320/sy.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(41, 'Vanuatu', 'Vanuatu vatu', 'Vt', 'https://flagcdn.com/w320/vu.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(42, 'Honduras', 'Honduran lempira', 'L', 'https://flagcdn.com/w320/hn.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(43, 'Kiribati', 'Australian dollar', '$', 'https://flagcdn.com/w320/ki.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(44, 'Chile', 'Chilean peso', '$', 'https://flagcdn.com/w320/cl.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(45, 'Burkina Faso', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/bf.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(46, 'Saint Kitts and Nevis', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/kn.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(47, 'Saint Barthélemy', 'Euro', '€', 'https://flagcdn.com/w320/bl.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(48, 'Mexico', 'Mexican peso', '$', 'https://flagcdn.com/w320/mx.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(49, 'China', 'Chinese yuan', '¥', 'https://flagcdn.com/w320/cn.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(50, 'Timor-Leste', 'United States dollar', '$', 'https://flagcdn.com/w320/tl.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(51, 'British Indian Ocean Territory', 'United States dollar', '$', 'https://flagcdn.com/w320/io.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(52, 'South Sudan', 'South Sudanese pound', '£', 'https://flagcdn.com/w320/ss.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(53, 'Eswatini', 'Swazi lilangeni', 'L', 'https://flagcdn.com/w320/sz.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(54, 'Uzbekistan', 'Uzbekistani soʻm', 'so\'m', 'https://flagcdn.com/w320/uz.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(55, 'Indonesia', 'Indonesian rupiah', 'Rp', 'https://flagcdn.com/w320/id.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(56, 'Paraguay', 'Paraguayan guaraní', '₲', 'https://flagcdn.com/w320/py.png', '2023-06-22 11:44:24', '2023-06-22 11:44:24'),
(57, 'Monaco', 'Euro', '€', 'https://flagcdn.com/w320/mc.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(58, 'Grenada', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/gd.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(59, 'Croatia', 'Euro', '€', 'https://flagcdn.com/w320/hr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(60, 'Poland', 'Polish złoty', 'zł', 'https://flagcdn.com/w320/pl.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(61, 'Bosnia and Herzegovina', 'Bosnia and Herzegovina convertible mark', 'zł', 'https://flagcdn.com/w320/ba.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(62, 'Canada', 'Canadian dollar', '$', 'https://flagcdn.com/w320/ca.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(63, 'Portugal', 'Euro', '€', 'https://flagcdn.com/w320/pt.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(64, 'Brazil', 'Brazilian real', 'R$', 'https://flagcdn.com/w320/br.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(65, 'Mauritania', 'Mauritanian ouguiya', 'UM', 'https://flagcdn.com/w320/mr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(66, 'Israel', 'Israeli new shekel', '₪', 'https://flagcdn.com/w320/il.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(67, 'Curaçao', 'Netherlands Antillean guilder', 'ƒ', 'https://flagcdn.com/w320/cw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(68, 'Brunei', 'Brunei dollar', '$', 'https://flagcdn.com/w320/bn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(69, 'Angola', 'Angolan kwanza', 'Kz', 'https://flagcdn.com/w320/ao.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(70, 'Malta', 'Euro', '€', 'https://flagcdn.com/w320/mt.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(71, 'Belarus', 'Belarusian ruble', 'Br', 'https://flagcdn.com/w320/by.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(72, 'Turkey', 'Turkish lira', '₺', 'https://flagcdn.com/w320/tr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(73, 'Finland', 'Euro', '€', 'https://flagcdn.com/w320/fi.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(74, 'Gibraltar', 'Gibraltar pound', '£', 'https://flagcdn.com/w320/gi.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(75, 'Bhutan', 'Bhutanese ngultrum', 'Nu.', 'https://flagcdn.com/w320/bt.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(76, 'Spain', 'Euro', '€', 'https://flagcdn.com/w320/es.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(77, 'Venezuela', 'Venezuelan bolívar soberano', 'Bs.S.', 'https://flagcdn.com/w320/ve.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(78, 'Qatar', 'Qatari riyal', 'ر.ق', 'https://flagcdn.com/w320/qa.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(79, 'Czechia', 'Czech koruna', 'Kč', 'https://flagcdn.com/w320/cz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(80, 'Kuwait', 'Kuwaiti dinar', 'د.ك', 'https://flagcdn.com/w320/kw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(81, 'Montenegro', 'Euro', '€', 'https://flagcdn.com/w320/me.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(82, 'India', 'Indian rupee', '₹', 'https://flagcdn.com/w320/in.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(83, 'New Zealand', 'New Zealand dollar', '$', 'https://flagcdn.com/w320/nz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(84, 'Jamaica', 'Jamaican dollar', '$', 'https://flagcdn.com/w320/jm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(85, 'Cayman Islands', 'Cayman Islands dollar', '$', 'https://flagcdn.com/w320/ky.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(86, 'San Marino', 'Euro', '€', 'https://flagcdn.com/w320/sm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(87, 'Republic of the Congo', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/cg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(88, 'Pakistan', 'Pakistani rupee', '₨', 'https://flagcdn.com/w320/pk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(89, 'France', 'Euro', '€', 'https://flagcdn.com/w320/fr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(90, 'Kazakhstan', 'Kazakhstani tenge', '₸', 'https://flagcdn.com/w320/kz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(91, 'Bahrain', 'Bahraini dinar', '.د.ب', 'https://flagcdn.com/w320/bh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(92, 'Fiji', 'Fijian dollar', '$', 'https://flagcdn.com/w320/fj.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(93, 'Iceland', 'Icelandic króna', 'kr', 'https://flagcdn.com/w320/is.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(94, 'Myanmar', 'Burmese kyat', 'Ks', 'https://flagcdn.com/w320/mm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(95, 'Bangladesh', 'Bangladeshi taka', '৳', 'https://flagcdn.com/w320/bd.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(96, 'Philippines', 'Philippine peso', '₱', 'https://flagcdn.com/w320/ph.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(97, 'Equatorial Guinea', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/gq.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(98, 'Ireland', 'Euro', '€', 'https://flagcdn.com/w320/ie.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(99, 'Nepal', 'Nepalese rupee', '₨', 'https://flagcdn.com/w320/np.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(100, 'Yemen', 'Yemeni rial', '﷼', 'https://flagcdn.com/w320/ye.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(101, 'South Korea', 'South Korean won', '₩', 'https://flagcdn.com/w320/kr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(102, 'Denmark', 'Danish krone', 'kr', 'https://flagcdn.com/w320/dk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(103, 'Oman', 'Omani rial', 'ر.ع.', 'https://flagcdn.com/w320/om.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(104, 'Saint Vincent and the Grenadines', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/vc.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(105, 'Eritrea', 'Eritrean nakfa', 'Nfk', 'https://flagcdn.com/w320/er.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(106, 'Australia', 'Australian dollar', '$', 'https://flagcdn.com/w320/au.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(107, 'Iran', 'Iranian rial', '﷼', 'https://flagcdn.com/w320/ir.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(108, 'El Salvador', 'United States dollar', '$', 'https://flagcdn.com/w320/sv.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(109, 'Tanzania', 'Tanzanian shilling', 'Sh', 'https://flagcdn.com/w320/tz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(110, 'Guadeloupe', 'Euro', '€', 'https://flagcdn.com/w320/gp.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(111, 'Solomon Islands', 'Solomon Islands dollar', '$', 'https://flagcdn.com/w320/sb.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(112, 'Kenya', 'Kenyan shilling', 'Sh', 'https://flagcdn.com/w320/ke.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(113, 'Dominican Republic', 'Dominican peso', '$', 'https://flagcdn.com/w320/do.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(114, 'Greece', 'Euro', '€', 'https://flagcdn.com/w320/gr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(115, 'Guernsey', 'British pound', '£', 'https://flagcdn.com/w320/gg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(116, 'Rwanda', 'Rwandan franc', 'Fr', 'https://flagcdn.com/w320/rw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(117, 'Saint Pierre and Miquelon', 'Euro', '€', 'https://flagcdn.com/w320/pm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(118, 'Tuvalu', 'Australian dollar', '$', 'https://flagcdn.com/w320/tv.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(119, 'Taiwan', 'New Taiwan dollar', '$', 'https://flagcdn.com/w320/tw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(120, 'Guyana', 'Guyanese dollar', '$', 'https://flagcdn.com/w320/gy.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(121, 'Seychelles', 'Seychellois rupee', '₨', 'https://flagcdn.com/w320/sc.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(122, 'North Korea', 'North Korean won', '₩', 'https://flagcdn.com/w320/kp.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(123, 'Botswana', 'Botswana pula', 'P', 'https://flagcdn.com/w320/bw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(124, 'Cambodia', 'Cambodian riel', '៛', 'https://flagcdn.com/w320/kh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(125, 'Barbados', 'Barbadian dollar', '$', 'https://flagcdn.com/w320/bb.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(126, 'Colombia', 'Colombian peso', '$', 'https://flagcdn.com/w320/co.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(127, 'Ukraine', 'Ukrainian hryvnia', '₴', 'https://flagcdn.com/w320/ua.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(128, 'Ivory Coast', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/ci.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(129, 'Nauru', 'Australian dollar', '$', 'https://flagcdn.com/w320/nr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(130, 'Namibia', 'Namibian dollar', '$', 'https://flagcdn.com/w320/na.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(131, 'Chad', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/td.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(132, 'Tonga', 'Tongan paʻanga', 'T$', 'https://flagcdn.com/w320/to.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(133, 'Argentina', 'Argentine peso', '$', 'https://flagcdn.com/w320/ar.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(134, 'Christmas Island', 'Australian dollar', '$', 'https://flagcdn.com/w320/cx.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(135, 'Niger', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/ne.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(136, 'Marshall Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/mh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(137, 'Costa Rica', 'Costa Rican colón', '₡', 'https://flagcdn.com/w320/cr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(138, 'Ghana', 'Ghanaian cedi', '₵', 'https://flagcdn.com/w320/gh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(139, 'Austria', 'Euro', '€', 'https://flagcdn.com/w320/at.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(140, 'Saint Helena, Ascension and Tristan da Cunha', 'Pound sterling', '£', 'https://flagcdn.com/w320/sh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(141, 'Palestine', 'Egyptian pound', 'E£', 'https://flagcdn.com/w320/ps.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(142, 'Cuba', 'Cuban convertible peso', '$', 'https://flagcdn.com/w320/cu.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(143, 'Hungary', 'Hungarian forint', 'Ft', 'https://flagcdn.com/w320/hu.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(144, 'Micronesia', 'United States dollar', '$', 'https://flagcdn.com/w320/fm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(145, 'Belize', 'Belize dollar', '$', 'https://flagcdn.com/w320/bz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(146, 'Bahamas', 'Bahamian dollar', '$', 'https://flagcdn.com/w320/bs.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(147, 'Aruba', 'Aruban florin', 'ƒ', 'https://flagcdn.com/w320/aw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(148, 'São Tomé and Príncipe', 'São Tomé and Príncipe dobra', 'Db', 'https://flagcdn.com/w320/st.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(149, 'Russia', 'Russian ruble', '₽', 'https://flagcdn.com/w320/ru.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(150, 'Luxembourg', 'Euro', '€', 'https://flagcdn.com/w320/lu.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(151, 'Faroe Islands', 'Danish krone', 'kr', 'https://flagcdn.com/w320/fo.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(152, 'Nicaragua', 'Nicaraguan córdoba', 'C$', 'https://flagcdn.com/w320/ni.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(153, 'Tunisia', 'Tunisian dinar', 'د.ت', 'https://flagcdn.com/w320/tn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(154, 'DR Congo', 'Congolese franc', 'FC', 'https://flagcdn.com/w320/cd.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(155, 'Svalbard and Jan Mayen', 'krone', 'kr', 'https://flagcdn.com/w320/sj.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(156, 'South Africa', 'South African rand', 'R', 'https://flagcdn.com/w320/za.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(157, 'Sierra Leone', 'Sierra Leonean leone', 'Le', 'https://flagcdn.com/w320/sl.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(158, 'Lesotho', 'Lesotho loti', 'L', 'https://flagcdn.com/w320/ls.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(159, 'South Georgia', 'Saint Helena pound', '£', 'https://flagcdn.com/w320/gs.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(160, 'Italy', 'Euro', '€', 'https://flagcdn.com/w320/it.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(161, 'Djibouti', 'Djiboutian franc', 'Fr', 'https://flagcdn.com/w320/dj.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(162, 'Sri Lanka', 'Sri Lankan rupee', 'Rs  රු', 'https://flagcdn.com/w320/lk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(163, 'Saint Lucia', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/lc.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(164, 'Samoa', 'Samoan tālā', 'T', 'https://flagcdn.com/w320/ws.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(165, 'Cocos (Keeling) Islands', 'Australian dollar', '$', 'https://flagcdn.com/w320/cc.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(166, 'Puerto Rico', 'United States dollar', '$', 'https://flagcdn.com/w320/pr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(167, 'Gabon', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/ga.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(168, 'Turkmenistan', 'Turkmenistan manat', 'm', 'https://flagcdn.com/w320/tm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(169, 'Latvia', 'Euro', '€', 'https://flagcdn.com/w320/lv.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(170, 'Senegal', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/sn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(171, 'Belgium', 'Euro', '€', 'https://flagcdn.com/w320/be.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(172, 'Moldova', 'Moldovan leu', 'L', 'https://flagcdn.com/w320/md.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(173, 'Liechtenstein', 'Swiss franc', 'Fr', 'https://flagcdn.com/w320/li.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(174, 'Malawi', 'Malawian kwacha', 'MK', 'https://flagcdn.com/w320/mw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(175, 'Lebanon', 'Lebanese pound', 'ل.ل', 'https://flagcdn.com/w320/lb.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(176, 'Mongolia', 'Mongolian tögrög', '₮', 'https://flagcdn.com/w320/mn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(177, 'Norway', 'Norwegian krone', 'kr', 'https://flagcdn.com/w320/no.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(178, 'British Virgin Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/vg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(179, 'Cameroon', 'Central African CFA franc', 'Fr', 'https://flagcdn.com/w320/cm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(180, 'Thailand', 'Thai baht', '฿', 'https://flagcdn.com/w320/th.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(181, 'Nigeria', 'Nigerian naira', '₦', 'https://flagcdn.com/w320/ng.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(182, 'Réunion', 'Euro', '€', 'https://flagcdn.com/w320/re.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(183, 'Cape Verde', 'Cape Verdean escudo', 'Esc', 'https://flagcdn.com/w320/cv.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(184, 'Jersey', 'British pound', '£', 'https://flagcdn.com/w320/je.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(185, 'Algeria', 'Algerian dinar', 'د.ج', 'https://flagcdn.com/w320/dz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(186, 'Laos', 'Lao kip', '₭', 'https://flagcdn.com/w320/la.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(187, 'Caribbean Netherlands', 'United States dollar', '$', 'https://flagcdn.com/w320/bq.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(188, 'Azerbaijan', 'Azerbaijani manat', '₼', 'https://flagcdn.com/w320/az.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(189, 'Sint Maarten', 'Netherlands Antillean guilder', 'ƒ', 'https://flagcdn.com/w320/sx.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(190, 'Morocco', 'Moroccan dirham', 'د.م.', 'https://flagcdn.com/w320/ma.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(191, 'Åland Islands', 'Euro', '€', 'https://flagcdn.com/w320/ax.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(192, 'Bulgaria', 'Bulgarian lev', 'лв', 'https://flagcdn.com/w320/bg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(193, 'Burundi', 'Burundian franc', 'Fr', 'https://flagcdn.com/w320/bi.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(194, 'Uganda', 'Ugandan shilling', 'Sh', 'https://flagcdn.com/w320/ug.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(195, 'Kosovo', 'Euro', '€', 'https://flagcdn.com/w320/xk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(196, 'Mozambique', 'Mozambican metical', 'MT', 'https://flagcdn.com/w320/mz.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(197, 'Georgia', 'lari', '₾', 'https://flagcdn.com/w320/ge.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(198, 'United Kingdom', 'British pound', '£', 'https://flagcdn.com/w320/gb.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(199, 'Wallis and Futuna', 'CFP franc', '₣', 'https://flagcdn.com/w320/wf.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(200, 'Pitcairn Islands', 'New Zealand dollar', '$', 'https://flagcdn.com/w320/pn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(201, 'Romania', 'Romanian leu', 'lei', 'https://flagcdn.com/w320/ro.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(202, 'Vietnam', 'Vietnamese đồng', '₫', 'https://flagcdn.com/w320/vn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(203, 'French Southern and Antarctic Lands', 'Euro', '€', 'https://flagcdn.com/w320/tf.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(204, 'Western Sahara', 'Algerian dinar', 'دج', 'https://flagcdn.com/w320/eh.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(205, 'Japan', 'Japanese yen', '¥', 'https://flagcdn.com/w320/jp.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(206, 'Egypt', 'Egyptian pound', '£', 'https://flagcdn.com/w320/eg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(207, 'Liberia', 'Liberian dollar', '$', 'https://flagcdn.com/w320/lr.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(208, 'Lithuania', 'Euro', '€', 'https://flagcdn.com/w320/lt.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(209, 'Haiti', 'Haitian gourde', 'G', 'https://flagcdn.com/w320/ht.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(210, 'United States Virgin Islands', 'United States dollar', '$', 'https://flagcdn.com/w320/vi.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(211, 'Papua New Guinea', 'Papua New Guinean kina', 'K', 'https://flagcdn.com/w320/pg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(212, 'Hong Kong', 'Hong Kong dollar', '$', 'https://flagcdn.com/w320/hk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(213, 'Kyrgyzstan', 'Kyrgyzstani som', 'с', 'https://flagcdn.com/w320/kg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(214, 'Palau', 'United States dollar', '$', 'https://flagcdn.com/w320/pw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(215, 'Madagascar', 'Malagasy ariary', 'Ar', 'https://flagcdn.com/w320/mg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(216, 'Gambia', 'dalasi', 'D', 'https://flagcdn.com/w320/gm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(217, 'Togo', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/tg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(218, 'Tokelau', 'New Zealand dollar', '$', 'https://flagcdn.com/w320/tk.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(219, 'Slovenia', 'Euro', '€', 'https://flagcdn.com/w320/si.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(220, 'Singapore', 'Singapore dollar', '$', 'https://flagcdn.com/w320/sg.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(221, 'French Guiana', 'Euro', '€', 'https://flagcdn.com/w320/gf.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(222, 'United States', 'United States dollar', '$', 'https://flagcdn.com/w320/us.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(223, 'Montserrat', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/ms.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(224, 'Malaysia', 'Malaysian ringgit', 'RM', 'https://flagcdn.com/w320/my.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(225, 'Germany', 'Euro', '€', 'https://flagcdn.com/w320/de.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(226, 'Antigua and Barbuda', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/ag.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(227, 'Saint Martin', 'Euro', '€', 'https://flagcdn.com/w320/mf.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(228, 'Somalia', 'Somali shilling', 'Sh', 'https://flagcdn.com/w320/so.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(229, 'Macau', 'Macanese pataca', 'P', 'https://flagcdn.com/w320/mo.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(230, 'Albania', 'Albanian lek', 'L', 'https://flagcdn.com/w320/al.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(231, 'Mayotte', 'Euro', '€', 'https://flagcdn.com/w320/yt.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(232, 'Dominica', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/dm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(233, 'Zambia', 'Zambian kwacha', 'ZK', 'https://flagcdn.com/w320/zm.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(234, 'Anguilla', 'Eastern Caribbean dollar', '$', 'https://flagcdn.com/w320/ai.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(235, 'Cook Islands', 'Cook Islands dollar', '$', 'https://flagcdn.com/w320/ck.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(236, 'Martinique', 'Euro', '€', 'https://flagcdn.com/w320/mq.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(237, 'Guinea', 'Guinean franc', 'Fr', 'https://flagcdn.com/w320/gn.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(238, 'Comoros', 'Comorian franc', 'Fr', 'https://flagcdn.com/w320/km.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(239, 'Niue', 'New Zealand dollar', '$', 'https://flagcdn.com/w320/nu.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(240, 'Switzerland', 'Swiss franc', 'Fr.', 'https://flagcdn.com/w320/ch.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(241, 'Norfolk Island', 'Australian dollar', '$', 'https://flagcdn.com/w320/nf.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(242, 'Isle of Man', 'British pound', '£', 'https://flagcdn.com/w320/im.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(243, 'Sudan', 'Sudanese pound', '£', 'https://flagcdn.com/w320/sd.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(244, 'Tajikistan', 'Tajikistani somoni', 'ЅМ', 'https://flagcdn.com/w320/tj.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(245, 'Uruguay', 'Uruguayan peso', '$', 'https://flagcdn.com/w320/uy.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(246, 'Cyprus', 'Euro', '€', 'https://flagcdn.com/w320/cy.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25'),
(247, 'Guinea-Bissau', 'West African CFA franc', 'Fr', 'https://flagcdn.com/w320/gw.png', '2023-06-22 11:44:25', '2023-06-22 11:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `ip` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firebase_image_url`
--

CREATE TABLE `firebase_image_url` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_23_121701_create_cruds_table', 1),
(6, '2023_05_31_104350_create_employee', 1),
(7, '2023_06_01_162555_create_countries_names', 1),
(8, '2023_06_02_095958_create_firebase_image_url', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `country_id` varchar(6) DEFAULT NULL,
  `ip` varchar(30) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `country_id`, `ip`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 'zubair', 'zubair@gmail.com', NULL, '$2y$10$z.ILcdX/z02wWfCx0XjTVOeiNTXRDkEPtmMMfH4D2AD6cgRf9A6S2', '0303022', '64', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-16 14:00:22', '2023-07-16 14:00:22'),
(46, 'Um', 'ur@gmail.com', NULL, '$2y$10$sW8A0QtEnFeehIRKWN4zRusz6u9ZUP3el4Wwep5MpChhV30nTnoAO', '03022', '20', '127.0.0.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-23 14:08:24', '2023-07-30 15:19:17'),
(53, 'amirh', 'ah@gmail.com', NULL, '$2y$10$AT9vJu/UhBamSNaO4r0aruyfFXHsldP8d2sGmvtJRz7TtXHURY/Iq', '030099399', '205', '127.0.0.1', 'https://firebasestorage.googleapis.com/v0/b/t-1-userauth.appspot.com/o/images%2FScreenshot%202023-07-24%20195728.png?alt=media&token=0c8c097b-c2ec-47fe-aa6d-73cc71710bc4', NULL, '2023-07-30 15:20:29', '2023-07-30 15:20:29'),
(55, 'Talha', 'talha@gmail.com', NULL, '$2y$10$M7b0ASGRsPlt6WeVBGWTwOho3RvSlXy7PQS9UeqXeyCqpAxVnC4kW', '0303022', '78', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06'),
(56, 'Anas', 'anas@gmail.com', NULL, '$2y$10$1pND0imixEuY7vYETDWZIOvMSa5ghJSZN3NdHflgHcAtmvkPHFBUu', '0303022', '93', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06'),
(57, 'Ali', 'ali@gmail.com', NULL, '$2y$10$54zk28POJDhiLi5FKz/lBuJ/h9tGZeMQ.BUsWDDOKTzYZs8ioUGRS', '0303022', '44', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06'),
(58, 'Umer', 'umer@gmail.com', NULL, '$2y$10$KqMVvBQa83d9v6ChQOYbJ.wb/J/Lo4/4rYYxvgthMjl5vVT3JNob6', '0303022', '20', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06'),
(60, 'Yasir', 'yasir@gmail.com', NULL, '$2y$10$Fai1gmQ0ffXekQDJQWUqeOjkCxPmmEDa.GtNLwy5b.X0GNqfETKLW', '0303022', '78', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06'),
(63, 'Mnib', 'munib@gmail.com', NULL, '$2y$10$r5sFaR9u5OcRb2cb0cu6DO4XbNj1OhoeFSrmdLAVErHXezbfFZii6', '0303022', '78', '192.1.1.1', 'jsjsjsjsjjsjsjs', NULL, '2023-07-30 15:21:06', '2023-07-30 15:21:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries_names`
--
ALTER TABLE `countries_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `firebase_image_url`
--
ALTER TABLE `firebase_image_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries_names`
--
ALTER TABLE `countries_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firebase_image_url`
--
ALTER TABLE `firebase_image_url`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
