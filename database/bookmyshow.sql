-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 09:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmyshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `type`, `email`, `password`, `status`, `created_date`) VALUES
(1, 'Ayushi', '', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, '0000-00-00 00:00:00'),
(2, 'Gopu Tyagi', '', 'gopu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-06-01 10:35:41'),
(3, 'Ayushi Tyagi', '', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-06-01 10:50:01'),
(4, 'Ayushi Tyagi', '', 'ayushityagi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-06-01 10:54:38'),
(5, 'Ayushi Tyagi', '', 'ayushityagi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-06-01 10:55:02'),
(7, ' Ayushi Tyagi', '', 'tyagiayushi9953@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 1, '2022-06-02 19:55:59'),
(8, 'Pogo', '', 'pogo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-07-29 16:19:30'),
(9, 'Pogo', 'admin-user', 'pogo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-07-29 16:23:10'),
(10, 'Ayushi Tyagi', 'end-user', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-07-29 16:24:45'),
(11, 'Gopo', 'admin-user', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-07-29 16:35:20'),
(12, 'Shivo', 'end-user', 'shivo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-07-29 16:42:54'),
(13, 'Ayu', 'end-user', 'ayu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-08-08 17:07:05'),
(14, 'kapil chauhan', 'end-user', 'kapil@gmail.com', '636546614287ca8fb7c381e1fcc31bb4', 1, '2022-08-09 17:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_short_name` varchar(100) NOT NULL,
  `artist_full_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `artist_type` varchar(200) NOT NULL,
  `born_date` varchar(100) NOT NULL,
  `born_place` varchar(200) NOT NULL,
  `about_artist` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_short_name`, `artist_full_name`, `image`, `artist_type`, `born_date`, `born_place`, `about_artist`, `status`, `created_date`) VALUES
(2, ' Kiara Advani', ' Alia Advani', 'artist22-06-11-13-21-23.jpeg', 'Actor', 'July 31,1992', 'Mumbai,Maharashtra,India', '', 1, '2022-06-11 13:21:23'),
(3, ' Kiara ', ' Alia Advani', 'artist22-06-11-13-22-04.', 'Actor', 'July 31,1992', 'Mumbai,Maharashtra,India', '', 1, '2022-06-11 13:22:04'),
(4, ' Kiara  desc', ' Alia Advani', 'artist22-06-11-13-24-15.', 'Actor', 'July 31,1992', 'Mumbai,Maharashtra,India', '', 1, '2022-06-11 13:24:15'),
(7, 'a', 'a', '22-06-11-14-42-22photo.jpg', 'a', 'a', 'a', '', 1, '2022-06-11 14:42:28'),
(8, 'Ayushi Tyagi', 'Gopu Tyagi', '22-06-14-17-39-18photo.jpg', 'Frontend Developer', '8 july 2002', 'Jawahar Nagar', 'Iam Very Good Girl', 1, '2022-06-14 17:39:20'),
(9, 'Varun Dhavan', 'Varun Dhavan', '22-06-30-17-26-26photo.jpg', 'Actor, Comedian', '8 July 2002', 'Jawahar Nagar', 'He is very good actor', 1, '2022-06-30 17:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `status`, `created_date`) VALUES
(1, 'movies', 1, '2022-05-28 13:37:59'),
(2, 'stream', 1, '2022-05-28 13:38:27'),
(3, 'events', 1, '2022-05-28 13:38:38'),
(4, 'plays', 1, '2022-05-28 13:38:47'),
(5, 'sports', 1, '2022-05-28 13:38:57'),
(6, 'activities', 1, '2022-05-28 13:39:10'),
(7, 'buzz', 1, '2022-05-28 13:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `end_user`
--

CREATE TABLE `end_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `end_user`
--

INSERT INTO `end_user` (`user_id`, `name`, `email`, `password`, `status`, `created_date`) VALUES
(1, 'Ayushi Tyagi', 'ayushi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-06-01 15:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `artist_id` varchar(200) NOT NULL,
  `artist_name` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `type` varchar(100) NOT NULL,
  `small_img` varchar(100) NOT NULL,
  `big_img` varchar(100) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `event_organise_date` date NOT NULL,
  `ticket_opening_date` date NOT NULL,
  `no_off_seats` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name`, `price`, `artist_id`, `artist_name`, `description`, `type`, `small_img`, `big_img`, `cate_id`, `event_organise_date`, `ticket_opening_date`, `no_off_seats`, `status`, `created_date`) VALUES
(1, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 200, '9,2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-28-25.jpeg', 'event22-06-30-17-28-25.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:28:25'),
(2, 'Samrat Prithviraj', 250, '2,9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-30-29.jpeg', 'event22-06-30-17-30-29.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:30:29'),
(3, 'Samrat Prithviraj', 220, '9,2', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-31-38.jpeg', 'event22-06-30-17-31-38.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:31:38'),
(4, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral Comedy Shows ', 240, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-33-43.jpeg', 'event22-06-30-17-33-43.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:33:43'),
(5, 'Samrat Prithviraj', 190, '2', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-34-44.jpeg', 'event22-06-30-17-34-44.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:34:44'),
(6, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-36-00.jpeg', 'event22-06-30-17-36-00.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:36:00'),
(7, 'Samrat Prithviraj', 0, '2,9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-37-14.jpeg', 'event22-06-30-17-37-14.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:37:14'),
(8, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-38-24.jpeg', 'event22-06-30-17-38-24.', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:38:24'),
(9, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-38-41.jpeg', 'event22-06-30-17-38-41.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:38:41'),
(10, 'Samrat Prithviraj', 0, '2,9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-40-15.jpeg', 'event22-06-30-17-40-15.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:40:15'),
(11, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-41-16.jpeg', 'event22-06-30-17-41-16.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:41:16'),
(12, 'Samrat Prithviraj', 0, '2,9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-42-24.jpeg', 'event22-06-30-17-42-24.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:42:24'),
(13, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-43-19.jpeg', 'event22-06-30-17-43-19.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:43:19'),
(14, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-44-35.jpeg', 'event22-06-30-17-44-35.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:44:35'),
(15, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-45-47.jpeg', 'event22-06-30-17-45-47.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:45:47'),
(16, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2,9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-46-54.jpeg', 'event22-06-30-17-46-54.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:46:54'),
(17, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horro', 'event22-06-30-17-47-56.jpeg', 'event22-06-30-17-47-56.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:47:56'),
(18, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Horro', 'event22-06-30-17-49-09.jpeg', 'event22-06-30-17-49-09.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:49:09'),
(19, 'Samrat Prithviraj', 0, '2', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horro', 'event22-06-30-17-50-01.jpeg', 'event22-06-30-17-50-01.jpeg', 3, '0000-00-00', '0000-00-00', 20, 1, '2022-06-30 17:50:01'),
(20, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-51-05.jpeg', 'event22-06-30-17-51-05.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:51:05'),
(21, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horro', 'event22-06-30-17-53-03.jpeg', 'event22-06-30-17-53-03.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:53:03'),
(22, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Horro', 'event22-06-30-17-54-22.jpeg', 'event22-06-30-17-54-22.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:54:22'),
(23, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-55-16.jpeg', 'event22-06-30-17-55-16.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:55:16'),
(24, 'Samrat Prithviraj', 0, '2,9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horror', 'event22-06-30-17-56-21.jpeg', 'event22-06-30-17-56-21.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:56:21'),
(25, 'Samrat Prithviraj', 0, '2', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-17-57-27.jpeg', 'event22-06-30-17-57-27.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:57:27'),
(26, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Horro', 'event22-06-30-17-58-34.jpeg', 'event22-06-30-17-58-34.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:58:34'),
(27, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-17-59-33.jpeg', 'event22-06-30-17-59-33.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 17:59:33'),
(28, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-18-00-42.jpeg', 'event22-06-30-18-00-42.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:00:42'),
(29, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horro', 'event22-06-30-18-01-42.jpeg', 'event22-06-30-18-01-42.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:01:42'),
(30, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-18-04-18.jpeg', 'event22-06-30-18-04-18.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:04:18'),
(31, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horror', 'event22-06-30-18-05-15.jpeg', 'event22-06-30-18-05-15.jpeg', 3, '0000-00-00', '0000-00-00', 20, 1, '2022-06-30 18:05:15'),
(32, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-18-06-19.jpeg', 'event22-06-30-18-06-19.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:06:19'),
(33, 'Samrat Prithviraj', 0, '2', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-18-07-25.jpeg', 'event22-06-30-18-07-25.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:07:25'),
(34, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '9', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-18-08-44.jpeg', 'event22-06-30-18-08-44.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:08:44'),
(35, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-18-09-47.jpeg', 'event22-06-30-18-09-47.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:09:47'),
(36, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Horror', 'event22-06-30-18-10-56.jpeg', 'event22-06-30-18-10-56.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:10:56'),
(37, 'Jo Bolta Hai Wohi Hota Hai ft By Harsh Gujral', 0, '2', '', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get you with his highly witty yet charming style.', 'Comedy', 'event22-06-30-18-12-06.jpeg', 'event22-06-30-18-12-06.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:12:06'),
(38, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-06-30-18-13-27.jpeg', 'event22-06-30-18-13-27.jpeg', 3, '2022-06-30', '2022-06-30', 20, 1, '2022-06-30 18:13:27'),
(39, 'Samrat Prithviraj', 0, '9', '', 'The film Samrat Prithviraj is based on the life and heroism of the fearless and mighty Prithviraj Chauhan and superstar Akshay Kumar is essaying the role of the warrior. Historians and folk legends portray him as an incredibly brave king who stood in front of the merciless Muhammad of Ghor and his ruthless invaders of India. Samrat Prithviraj Chauhan`s daredevilry and heroism against Muhammad of Ghor catapulted him into a legendary ruler and fighter of free India.', 'Comedy', 'event22-07-12-19-53-10.jpeg', 'event22-07-12-19-53-10.jpeg', 1, '2022-07-12', '2022-07-12', 20, 1, '2022-07-12 19:53:10'),
(40, '', 0, '9,2,3', '', '', '', 'event22-07-12-20-47-09.', 'event22-07-12-20-47-09.', 0, '0000-00-00', '0000-00-00', 0, 1, '2022-07-12 20:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `orderseats`
--

CREATE TABLE `orderseats` (
  `orderseats_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seats_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `net_price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderseats`
--

INSERT INTO `orderseats` (`orderseats_id`, `user_id`, `seats_id`, `event_id`, `price`, `net_price`, `status`, `created_date`) VALUES
(1, 10, 0, 2, 0, 0, 1, '2022-08-09 14:42:56'),
(2, 12, 0, 2, 0, 0, 1, '2022-08-09 14:44:30'),
(3, 10, 0, 2, 0, 0, 1, '2022-08-09 16:52:31'),
(4, 14, 0, 1, 0, 0, 1, '2022-08-09 17:43:20'),
(5, 14, 0, 1, 0, 0, 1, '2022-08-09 17:44:23'),
(6, 10, 0, 2, 0, 0, 1, '2022-08-30 13:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seats_id` int(11) NOT NULL,
  `event_id` varchar(400) NOT NULL,
  `seatbook` varchar(400) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seats_id`, `event_id`, `seatbook`, `status`, `created_date`) VALUES
(1, '39', 'F1,F2,F3,', 1, '2022-07-14 16:56:31'),
(2, 'eventid', 'A1,A2,A3,', 1, '2022-07-15 09:39:20'),
(3, 'eventid', 'E1,E2,E3,', 1, '2022-07-15 09:41:09'),
(4, '2', 'A1,A2,A3,F1,F2,F6,F5,F4,F3,D1,D2,B3,B4,E3,E2,B1,B2,', 1, '2022-07-15 09:41:36'),
(5, '2', 'A1,A2,A3,F1,F2,F6,F5,F4,F3,D1,D2,B3,B4,E3,E2,B1,B2,', 1, '2022-07-15 09:42:01'),
(6, '2', 'A1,A2,A3,F1,F2,F6,F5,F4,F3,D1,D2,B3,B4,E3,E2,B1,B2,', 1, '2022-07-15 09:42:56'),
(7, '3', 'B1,B2,B3,B4,A1,A2,A3,', 1, '2022-07-15 09:45:13'),
(8, '7', 'A1,A1,A2,A2,A3,A4,', 1, '2022-07-15 17:19:07'),
(9, '15', 'A1,A2,A3,B1,B2,', 1, '2022-07-17 19:47:55'),
(10, '1', 'A1,A2,A3,C12,C13,C11,', 1, '2022-08-08 16:51:36'),
(11, '4', 'F6,E6,', 1, '2022-08-09 14:28:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `end_user`
--
ALTER TABLE `end_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `orderseats`
--
ALTER TABLE `orderseats`
  ADD PRIMARY KEY (`orderseats_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seats_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `end_user`
--
ALTER TABLE `end_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orderseats`
--
ALTER TABLE `orderseats`
  MODIFY `orderseats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
