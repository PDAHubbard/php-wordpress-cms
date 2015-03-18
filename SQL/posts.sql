-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 18. Mrz 2015 um 16:38
-- Server Version: 5.5.41
-- PHP-Version: 5.4.36-0+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `c-man`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_category` text,
  `insert_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_content`, `post_category`, `insert_time`) VALUES
(18, 'asdfad', 'asdfasfd', 'a:1:{i:3;s:4:"cat3";}', '2015-03-18 15:16:54'),
(19, 'wurble', 'splus', 'a:1:{i:1;s:4:"cat1";}', '2015-03-18 15:18:17'),
(20, 'ergr', 'ergerg', 'a:3:{i:1;s:4:"cat1";i:2;s:4:"cat2";i:3;s:4:"cat3";}', '2015-03-18 15:19:55'),
(21, 'ergr', 'ergerg', 'a:3:{i:1;s:4:"cat1";i:2;s:4:"cat2";i:3;s:4:"cat3";}', '2015-03-18 15:20:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
