-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2023 at 03:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comix_riot`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_blog_comic_relation`
--

CREATE TABLE `cmxr_blog_comic_relation` (
  `id` int(16) NOT NULL,
  `blog_post` int(16) NOT NULL,
  `comic_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_blog_posts`
--

CREATE TABLE `cmxr_blog_posts` (
  `id` int(16) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `title` varchar(512) NOT NULL,
  `body` int(11) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_posted` timestamp NULL DEFAULT current_timestamp(),
  `link_to_page` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_blog_tags`
--

CREATE TABLE `cmxr_blog_tags` (
  `id` int(16) NOT NULL,
  `blog_post` int(16) NOT NULL,
  `tag_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_pages`
--

CREATE TABLE `cmxr_pages` (
  `id` int(16) NOT NULL,
  `book_id` int(16) DEFAULT NULL,
  `page_order` int(5) DEFAULT NULL,
  `slug` varchar(512) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `in_archive` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `transcript` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_page_imgs`
--

CREATE TABLE `cmxr_page_imgs` (
  `id` int(16) NOT NULL,
  `file_url` varchar(512) NOT NULL,
  `comic_post_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_page_tags`
--

CREATE TABLE `cmxr_page_tags` (
  `id` int(16) NOT NULL,
  `comic_post_id` int(16) NOT NULL,
  `tag_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_tags`
--

CREATE TABLE `cmxr_tags` (
  `id` int(16) NOT NULL,
  `tag_text` varchar(512) NOT NULL,
  `tag_slug` varchar(512) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cmxr_users`
--

CREATE TABLE `cmxr_users` (
  `id` int(16) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(512) NOT NULL,
  `email` varchar(512) NOT NULL,
  `display_name` varchar(32) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `date_deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmxr_blog_comic_relation`
--
ALTER TABLE `cmxr_blog_comic_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmxr_blog_posts`
--
ALTER TABLE `cmxr_blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmxr_pages`
--
ALTER TABLE `cmxr_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmxr_page_imgs`
--
ALTER TABLE `cmxr_page_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmxr_page_tags`
--
ALTER TABLE `cmxr_page_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmxr_users`
--
ALTER TABLE `cmxr_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmxr_blog_comic_relation`
--
ALTER TABLE `cmxr_blog_comic_relation`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmxr_blog_posts`
--
ALTER TABLE `cmxr_blog_posts`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmxr_pages`
--
ALTER TABLE `cmxr_pages`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmxr_page_imgs`
--
ALTER TABLE `cmxr_page_imgs`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmxr_page_tags`
--
ALTER TABLE `cmxr_page_tags`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cmxr_users`
--
ALTER TABLE `cmxr_users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
