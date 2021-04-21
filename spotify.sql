-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 04:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `image`) VALUES
(1, 'Taking The Long Way', 19, 1, 'assets/images/albumimages/album1.jpg'),
(2, 'The Reminder', 18, 2, 'assets/images/albumimages/album2.jpg'),
(3, 'Stay Gold', 1, 3, 'assets/images/albumimages/album3.jpg'),
(4, 'Faith', 2, 4, 'assets/images/albumimages/album4.jpg'),
(5, 'Night Visions', 3, 5, 'assets/images/albumimages/album5.jpg'),
(6, 'In Between Dreams', 4, 1, 'assets/images/albumimages/album6.jpg'),
(7, 'Early In the morning', 5, 2, 'assets/images/albumimages/album7.jpg'),
(8, 'Undiscovered', 6, 3, 'assets/images/albumimages/album8.jpg'),
(9, 'In Colour', 7, 4, 'assets/images/albumimages/album9.jpg'),
(10, 'The Fame', 8, 5, 'assets/images/albumimages/album10.jpg'),
(11, 'Cloud Nine', 9, 1, 'assets/images/albumimages/album20.jpg'),
(12, 'Born To Die', 10, 2, 'assets/images/albumimages/album12.jpg'),
(13, 'Long Way Home', 11, 3, 'assets/images/albumimages/album13.jpg'),
(14, 'Harvest Moon', 12, 4, 'assets/images/albumimages/album14.jpg'),
(15, 'Oh, Inverted World', 13, 5, 'assets/images/albumimages/album15.jpg'),
(16, 'Beauty Behind The Madness', 14, 1, 'assets/images/albumimages/album16.jpg'),
(17, 'Let\'s Stay Together', 15, 2, 'assets/images/albumimages/album17.jpg'),
(18, 'Diva', 16, 3, 'assets/images/albumimages/album18.jpg'),
(19, 'Born To Love', 17, 4, 'assets/images/albumimages/album19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `artist_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `artist_image`) VALUES
(1, 'YoungBoy', 'assets/images/albumimages/album6.jpg'),
(2, 'Taylor Swift', 'assets/images/albumimages/album25.jpg'),
(3, 'Juice WRLD', 'assets/images/albumimages/album19.jpg'),
(4, 'Marilyn Mayson', 'assets/images/albumimages/album20.jpg'),
(5, 'Post Malone', 'assets/images/albumimages/album1.jpg'),
(6, 'Drake', 'assets/images/albumimages/album3.jpg'),
(7, 'Billie Eilish', 'assets/images/albumimages/album4.jpg'),
(8, 'Dua Lipa', 'assets/images/albumimages/album5.jpg'),
(9, 'Maroon 5', 'assets/images/albumimages/album8.jpg'),
(10, 'Ed Sheeran', 'assets/images/albumimages/album12.jpg'),
(11, 'Selena Gomez', 'assets/images/albumimages/album13.jpg'),
(12, 'Chris Brown', 'assets/images/albumimages/album10.jpg'),
(13, 'Harry Styles', 'assets/images/albumimages/album14.jpg'),
(14, 'Justin Bieber', 'assets/images/albumimages/album15.jpg'),
(15, 'DJ Khalid', 'assets/images/albumimages/album17.jpg'),
(16, 'Imagine Dragon', 'assets/images/albumimages/album18.jpg'),
(17, 'Jack Harlow', 'assets/images/albumimages/album21.jpg'),
(18, 'Pink Floyd', 'assets/images/albumimages/album2.jpg'),
(19, 'Bruno Mars', 'assets/images/albumimages/album3.jpg'),
(20, 'Adele', 'assets/images/albumimages/album5.jpg'),
(21, 'Illenium', 'assets/images/albumimages/album8.jpg'),
(22, 'Nick Jonas', 'assets/images/albumimages/album9.jpg'),
(23, 'Marshmello', 'assets/images/albumimages/album14.jpg'),
(24, 'Enrique Iglesias', 'assets/images/albumimages/album22.jpg'),
(25, 'Eminem', 'assets/images/albumimages/album24.jpg'),
(26, 'Coldplay', 'assets/images/albumimages/album1.jpg'),
(27, 'Ellie Goulding', 'assets/images/albumimages/album2.jpg'),
(28, 'Alan Walker', 'assets/images/albumimages/album3.jpg'),
(29, 'Charlie Puth', 'assets/images/albumimages/album4.jpg'),
(30, 'Shawn Mendes', 'assets/images/albumimages/album5.jpg'),
(31, 'Martin Garrix', 'assets/images/albumimages/album6.jpg'),
(32, 'Hardwell', 'assets/images/albumimages/album7.jpg'),
(33, 'Calvin Harris', 'assets/images/albumimages/album8.jpg'),
(34, 'The Chainsmokers', 'assets/images/albumimages/album9.jpg'),
(35, 'Clean Bandit', 'assets/images/albumimages/album10.jpg'),
(36, 'Ritviz', 'assets/images/albumimages/album11.jpg'),
(37, 'John Legend', 'assets/images/albumimages/album12.jpg'),
(38, 'James Arthur', 'assets/images/albumimages/album14.jpg'),
(39, 'Calum Scott', 'assets/images/albumimages/album15.jpg'),
(40, 'Kodaline', 'assets/images/albumimages/album16.jpg'),
(41, 'PUBLIC', 'assets/images/albumimages/album17.jpg'),
(42, 'Ali Gatie', 'assets/images/albumimages/album18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `image`) VALUES
(1, 'rock', 'assets/images/albumimages/album1.jpg'),
(2, 'pop', 'assets/images/albumimages/album3.jpg'),
(3, 'country', 'assets/images/albumimages/album5.jpg'),
(4, 'techno', 'assets/images/albumimages/album7.jpg'),
(5, 'jazz', 'assets/images/albumimages/album8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `likedsongs`
--

CREATE TABLE `likedsongs` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `songid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likedsongs`
--

INSERT INTO `likedsongs` (`id`, `email`, `songid`) VALUES
(9, 'purvi.h@somaiya.edu', '118'),
(11, 'purvi.h@somaiya.edu', '110'),
(15, 'purvi.h@somaiya.edu', '158'),
(16, 'purvi.h@somaiya.edu', '62'),
(19, 'purvi.h@somaiya.edu', '80');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`id`, `name`, `user`, `time`) VALUES
(10, 'play4', 'purvi.h@somaiya.edu', '2020-10-10 00:00:00'),
(11, 'play5', 'purvi.h@somaiya.edu', '2020-10-10 00:00:00'),
(13, 'Play1', 'purvi.h@somaiya.edu', '2020-10-16 00:00:00'),
(15, 'abcd', 'purvi.h@somaiya.edu', '2020-11-20 00:00:00'),
(17, 'myplaylist', 'purvi.h@somaiya.edu', '2020-11-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `id` int(11) NOT NULL,
  `songid` varchar(150) NOT NULL,
  `playlistid` int(11) NOT NULL,
  `playlistorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlistsongs`
--

INSERT INTO `playlistsongs` (`id`, `songid`, `playlistid`, `playlistorder`) VALUES
(7, '2', 10, 4),
(8, '11', 15, 0),
(9, '12', 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `premiumalbums`
--

CREATE TABLE `premiumalbums` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premiumalbums`
--

INSERT INTO `premiumalbums` (`id`, `title`, `artist`, `genre`, `image`) VALUES
(1, 'Oh, inverted world', '13', '5', 'assets/images/albumimages/album15.jpg'),
(2, 'Heart of Gold', '6', '3', 'assets/images/albumimages/album19.jpg'),
(3, 'Brainstorm', '8', '6', 'assets/images/albumimages/album11.jpg'),
(4, 'Gald Always', '10', '3', 'assets/images/albumimages/album10.jpg'),
(5, 'Solid Gold', '17', '2', 'assets/images/albumimages/album7.jpg'),
(6, 'Happy Days', '13', '5', 'assets/images/albumimages/album13.jpg'),
(7, 'Gald Always', '10', '3', 'assets/images/albumimages/album6.jpg'),
(8, 'Goodness', '5', '3', 'assets/images/albumimages/album12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `premiumusers`
--

CREATE TABLE `premiumusers` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premiumusers`
--

INSERT INTO `premiumusers` (`id`, `email`) VALUES
(1, 'purvi.h@somaiya.edu'),
(2, 'purvi.ha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`, `image`) VALUES
(1, 'You Belong With Me', 2, 3, 4, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 101, 'assets/images/albumimages/album26.jpg'),
(2, 'Lover', 2, 3, 4, '3:58', 'assets/songs/Lover.mp3', 2, 26, 'assets/images/albumimages/album25.jpg'),
(3, 'My Own Song', 2, 3, 4, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 98, 'assets/images/albumimages/album26.jpg'),
(4, 'You Belong With Me', 1, 1, 4, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 100, 'assets/images/albumimages/album26.jpg'),
(6, 'Lover', 1, 1, 4, '3:58', 'assets/songs/Lover.mp3', 2, 23, 'assets/images/albumimages/album25.jpg'),
(7, 'You Belong With Me', 3, 2, 1, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 103, 'assets/images/albumimages/album26.jpg'),
(8, 'Lover', 3, 2, 1, '3:58', 'assets/songs/Lover.mp3', 2, 31, 'assets/images/albumimages/album25.jpg'),
(10, 'Made with love', 3, 2, 1, '3:58', 'assets/songs/Lover.mp3', 3, 29, 'assets/images/albumimages/album25.jpg'),
(11, 'You Belong With Me', 4, 4, 1, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 102, 'assets/images/albumimages/album26.jpg'),
(12, 'Lover', 4, 4, 1, '3:58', 'assets/songs/Lover.mp3', 2, 28, 'assets/images/albumimages/album25.jpg'),
(13, 'My Own Song', 4, 4, 1, '3:47', 'assets/songs/You Belong With Me.mp3', 1, 99, 'assets/images/albumimages/album26.jpg'),
(14, 'Made with love', 4, 4, 1, '3:58', 'assets/songs/Lover.mp3', 3, 28, 'assets/images/albumimages/album25.jpg'),
(15, 'All I Want', 19, 1, 1, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(16, 'Attention', 19, 1, 1, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(17, 'Beautiful Day', 19, 1, 1, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(18, 'Better Now', 19, 1, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(19, 'Drowning in the river', 19, 1, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(20, 'All I Want', 18, 2, 2, '5:03', 'assets/songs/All I Want.mp3', 3, 2, 'assets/images/albumimages/album3.jpg'),
(21, 'Attention', 18, 2, 2, '4:03', 'assets/songs/Attention.mp3', 6, 1, 'assets/images/albumimages/album4.jpg'),
(22, 'Beautiful Day', 18, 2, 2, '5:03', 'assets/songs/All I Want.mp3', 4, 1, 'assets/images/albumimages/album5.jpg'),
(23, 'Better Now', 18, 2, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(24, 'Drowning in the river', 18, 2, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(25, 'All I Want', 1, 3, 3, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(26, 'Attention', 1, 3, 3, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(27, 'Beautiful Day', 1, 2, 2, '5:03', 'assets/songs/All I Want.mp3', 4, 3, 'assets/images/albumimages/album5.jpg'),
(28, 'Better Now', 1, 3, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(29, 'Drowning in the river', 1, 3, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(30, 'All I Want', 2, 4, 4, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(31, 'Attention', 2, 4, 4, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(32, 'Beautiful Day', 2, 4, 4, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(33, 'Better Now', 2, 4, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(34, 'Drowning in the river', 2, 4, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(35, 'All I Want', 3, 5, 5, '5:03', 'assets/songs/All I Want.mp3', 3, 1, 'assets/images/albumimages/album3.jpg'),
(36, 'Attention', 3, 5, 5, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(37, 'Beautiful Day', 3, 5, 5, '5:03', 'assets/songs/All I Want.mp3', 4, 1, 'assets/images/albumimages/album5.jpg'),
(38, 'Better Now', 3, 5, 5, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(39, 'Drowning in the river', 3, 5, 5, '5:03', 'assets/songs/All I Want.mp3', 7, 4, 'assets/images/albumimages/album3.jpg'),
(40, 'All I Want', 4, 6, 1, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(41, 'Attention', 4, 6, 1, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(42, 'Beautiful Day', 4, 6, 1, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(43, 'Better Now', 4, 6, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(44, 'Drowning in the river', 4, 6, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(45, 'All I Want', 5, 7, 2, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(46, 'Attention', 5, 7, 2, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(47, 'Beautiful Day', 5, 7, 2, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(48, 'Better Now', 5, 7, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(49, 'Drowning in the river', 5, 7, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(50, 'There for you', 5, 7, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(51, 'Wonderland', 5, 7, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(52, 'All I Want', 6, 8, 3, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(53, 'Attention', 6, 8, 3, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(54, 'Beautiful Day', 6, 8, 3, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(55, 'Better Now', 6, 8, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(56, 'Drowning in the river', 6, 8, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(57, 'Alive', 6, 8, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(58, 'Without Me', 6, 8, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(59, 'All I Want', 7, 9, 4, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(60, 'Attention', 7, 9, 4, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(61, 'Beautiful Day', 7, 9, 4, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(62, 'Better Now', 7, 9, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(63, 'Drowning in the river', 7, 9, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(64, 'Alive', 7, 9, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(65, 'Without Me', 7, 9, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(66, 'All I Want', 8, 10, 5, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(67, 'Attention', 8, 10, 5, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(68, 'Beautiful Day', 8, 10, 5, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(69, 'Better Now', 8, 10, 5, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(70, 'Drowning in the river', 8, 10, 5, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(71, 'Alive', 8, 10, 5, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(72, 'Without Me', 8, 10, 5, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(73, 'All I Want', 9, 11, 1, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(74, 'Attention', 9, 11, 1, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(75, 'Beautiful Day', 9, 11, 1, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(76, 'Better Now', 9, 11, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(77, 'Drowning in the river', 9, 11, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(78, 'Alive', 9, 11, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(79, 'Without Me', 9, 11, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(80, 'All I Want', 10, 12, 2, '5:03', 'assets/songs/All I Want.mp3', 3, 3, 'assets/images/albumimages/album3.jpg'),
(81, 'Attention', 10, 12, 2, '4:03', 'assets/songs/Attention.mp3', 6, 1, 'assets/images/albumimages/album4.jpg'),
(82, 'Beautiful Day', 10, 12, 2, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(83, 'Better Now', 10, 12, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 2, 'assets/images/albumimages/album6.jpg'),
(84, 'Drowning in the river', 10, 12, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 1, 'assets/images/albumimages/album3.jpg'),
(85, 'Alive', 10, 12, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(86, 'Without Me', 10, 12, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(87, 'All I Want', 11, 13, 3, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(88, 'Attention', 11, 13, 3, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(89, 'Beautiful Day', 11, 13, 3, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(90, 'Better Now', 11, 13, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(91, 'Drowning in the river', 11, 13, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(92, 'Alive', 11, 13, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(93, 'Without Me', 11, 13, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(94, 'All I Want', 12, 14, 4, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(95, 'Attention', 12, 14, 4, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(96, 'Beautiful Day', 12, 14, 4, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(97, 'Better Now', 12, 14, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(98, 'Drowning in the river', 12, 14, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(99, 'Alive', 12, 14, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(100, 'Without Me', 12, 14, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(101, 'All I Want', 13, 15, 5, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(102, 'Attention', 13, 15, 5, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(103, 'Beautiful Day', 13, 15, 5, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(104, 'Better Now', 13, 15, 5, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(105, 'Drowning in the river', 13, 15, 5, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(106, 'Alive', 13, 15, 5, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(107, 'Without Me', 13, 15, 5, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(108, 'All I Want', 14, 16, 1, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(109, 'Attention', 14, 16, 1, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(110, 'Beautiful Day', 14, 16, 1, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(111, 'Better Now', 14, 16, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(112, 'Drowning in the river', 14, 16, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(113, 'Alive', 14, 16, 1, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(114, 'Without Me', 14, 16, 1, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(115, 'All I Want', 15, 17, 2, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(116, 'Attention', 15, 17, 2, '4:03', 'assets/songs/Attention.mp3', 6, 0, 'assets/images/albumimages/album4.jpg'),
(117, 'Beautiful Day', 15, 17, 2, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(118, 'Better Now', 15, 17, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 1, 'assets/images/albumimages/album6.jpg'),
(119, 'Drowning in the river', 15, 17, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(120, 'Alive', 15, 17, 2, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(121, 'Without Me', 15, 17, 2, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(122, 'All I Want', 16, 18, 3, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(123, 'Attention', 16, 18, 3, '4:03', 'assets/songs/Attention.mp3', 6, 1, 'assets/images/albumimages/album4.jpg'),
(124, 'Beautiful Day', 16, 18, 3, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(125, 'Better Now', 16, 18, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(126, 'Drowning in the river', 16, 18, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(127, 'Alive', 16, 18, 3, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(128, 'Without Me', 16, 18, 3, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(129, 'All I Want', 17, 19, 4, '5:03', 'assets/songs/All I Want.mp3', 3, 0, 'assets/images/albumimages/album3.jpg'),
(130, 'Attention', 17, 19, 4, '4:03', 'assets/songs/Attention.mp3', 6, 1, 'assets/images/albumimages/album4.jpg'),
(131, 'Beautiful Day', 17, 19, 4, '5:03', 'assets/songs/All I Want.mp3', 4, 0, 'assets/images/albumimages/album5.jpg'),
(132, 'Better Now', 17, 19, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(133, 'Drowning in the river', 17, 19, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 0, 'assets/images/albumimages/album3.jpg'),
(134, 'Alive', 17, 19, 4, '5:03', 'assets/songs/Better Now.mp3', 5, 0, 'assets/images/albumimages/album6.jpg'),
(135, 'Without Me', 17, 19, 4, '5:03', 'assets/songs/All I Want.mp3', 7, 1, 'assets/images/albumimages/album3.jpg'),
(136, 'Rieverie', 20, 1, 5, '3:23', 'assets/songs/Perfume.mp3', 8, 1, 'assets/images/albumimages/album10.jpg'),
(137, 'Glamour', 20, 2, 1, '3:45', 'assets/songs/Perfume.mp3', 8, 2, 'assets/images/albumimages/album10.jpg'),
(138, 'Broken But Nice', 21, 3, 2, '4:23', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(139, 'Heart Of Gold', 21, 3, 2, '4:15', 'assets/songs/Lucid Dreams.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(140, 'Talking to the Moon', 22, 4, 3, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(141, 'Values', 22, 4, 3, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(142, 'Rieverie', 23, 17, 5, '3:23', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(143, 'Glamour', 23, 18, 3, '3:45', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(144, 'Broken But Nice', 24, 16, 2, '4:23', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(145, 'Heart Of Gold', 24, 15, 6, '4:15', 'assets/songs/Lucid Dreams.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(146, 'Talking to the Moon', 25, 14, 4, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(147, 'Values', 25, 19, 4, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(148, 'Rieverie', 26, 18, 3, '3:23', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(149, 'Glamour', 26, 12, 2, '3:45', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(150, 'Broken But Nice', 27, 15, 2, '4:23', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(151, 'Heart Of Gold', 27, 15, 4, '4:15', 'assets/songs/Lucid Dreams.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(152, 'Talking to the Moon', 28, 9, 3, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(153, 'Values', 28, 9, 5, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(154, 'Rieverie', 29, 7, 2, '3:23', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(155, 'Glamour', 29, 7, 2, '3:45', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(156, 'Broken But Nice', 30, 4, 2, '4:23', 'assets/songs/Attention.mp3', 8, 1, 'assets/images/albumimages/album11.jpg'),
(157, 'Heart Of Gold', 30, 6, 2, '4:15', 'assets/songs/Lucid Dreams.mp3', 8, 1, 'assets/images/albumimages/album11.jpg'),
(158, 'Talking to the Moon', 32, 3, 3, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(159, 'Values', 32, 3, 3, '2:13', 'assets/songs/Attention.mp3', 8, 0, 'assets/images/albumimages/album11.jpg'),
(160, 'Rieverie', 34, 11, 5, '3:23', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg'),
(161, 'Glamour', 35, 11, 1, '3:45', 'assets/songs/Perfume.mp3', 8, 0, 'assets/images/albumimages/album10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profilename` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` bigint(50) NOT NULL,
  `dobdate` int(10) NOT NULL,
  `dobmonth` int(10) NOT NULL,
  `dobyear` int(10) NOT NULL,
  `signupdate` datetime NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilename`, `email`, `password`, `contactno`, `dobdate`, `dobmonth`, `dobyear`, `signupdate`, `profilepic`, `token`) VALUES
(10, 'Purvi H', 'purvi@somaiya.edu', '', 0, 12, 2, 2000, '2020-10-13 00:00:00', 'assets/images/profile-pics/profilepic.png', '6cdc8b1b1ce7c023005964aefedf402ef9a42f3d'),
(11, 'Purvi', 'purvia@gmail.com', '', 0, 19, 9, 2000, '2020-11-25 00:00:00', 'assets/images/profile-pics/profilepic.png', '677481e3d734b76db508f886030060e1c35765ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likedsongs`
--
ALTER TABLE `likedsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premiumalbums`
--
ALTER TABLE `premiumalbums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premiumusers`
--
ALTER TABLE `premiumusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likedsongs`
--
ALTER TABLE `likedsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `premiumalbums`
--
ALTER TABLE `premiumalbums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `premiumusers`
--
ALTER TABLE `premiumusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
