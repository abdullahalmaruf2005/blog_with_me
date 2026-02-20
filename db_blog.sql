-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2026 at 12:48 PM
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
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'maruf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `message`) VALUES
(5, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'f'),
(6, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'f'),
(7, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'f'),
(8, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'f'),
(9, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'f'),
(10, 'Abdullah', 'Al Maruf', 'abdullahalmaruf058@gmail.com', 'ami jani na vai');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `author` varchar(500) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat`, `title`, `text`, `image`, `author`, `tag`, `date`) VALUES
(1, 1, 'JAVA IS Amazing', 'This page shares my best articles to read on topics like health, happiness, creativity, productivity and more. The central question that drives my work is, “How can we live better?” To answer that question, I like to write about science-based ways to solve practical problems.\r\nhis page shares my best articles to read on topics like health, happiness, creativity, productivity and more. The central question that drives my work is, “How can we live better?” To answer that question, I like to write about science-based ways to solve practical problems.\r\n<p>This page shares my best articles to read on topics like health, happiness, creativity, productivity and more. The central question that drives my work is, “How can we live better?” To answer that question, I like to write about science-based ways to solve practical problems;', 'https://miro.medium.com/0*gtY-llyEbkeoS1Sp.png', 'Abdullah Al Maruf', 'java', '2026-02-18 19:00:00'),
(2, 2, 'Mastering Java Streams: Efficient Data Processing in Modern Java', 'Java Streams, introduced in Java 8, allow developers to process collections of data in a functional style. Unlike traditional loops, streams let you perform operations like map(), filter(), and reduce() in a concise and readable way. For example, you can filter a list of numbers to get only even ones or sum all values with minimal code. Streams also support parallel processing, making large datasets easier to handle efficiently. By mastering streams, Java developers can write cleaner, faster, and more maintainable code.\r\nJava Streams, introduced in Java 8, allow developers to process collections of data in a functional style. Unlike traditional loops, streams let you perform operations like map(), filter(), and reduce() in a concise and readable way. For example, you can filter a list of numbers to get only even ones or sum all values with minimal code. Streams also support parallel processing, making large datasets easier to handle efficiently. By mastering streams, Java developers can write cleaner, faster, and more maintainable code.\r\nJava Streams, introduced in Java 8, allow developers to process collections of data in a functional style. Unlike traditional loops, streams let you perform operations like map(), filter(), and reduce() in a concise and readable way. For example, you can filter a list of numbers to get only even ones or sum all values with minimal code. Streams also support parallel processing, making large datasets easier to handle efficiently. By mastering streams, Java developers can write cleaner, faster, and more maintainable code.', 'https://content-media-cdn.codefinity.com/courses/8204075c-f832-4cb9-88b1-4e24e74ebdcb/update+image/Java+Advantages.png', 'maruf', 'java', '2026-02-14 13:39:42'),
(3, 3, 'PHP: The Power Behind Dynamic Websites', 'PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language designed for web development. Since its creation in 1994 by Rasmus Lerdorf, PHP has become the backbone of countless websites and web applications, including popular platforms like WordPress, Facebook, and Wikipedia. Its primary advantage is its ability to generate dynamic content, interact with databases, and handle forms seamlessly.\r\n\r\nOne of PHP’s key features is simplicity. Beginners can quickly embed PHP code into HTML using <?php ... ?> tags. For example, to display “Hello, World!” on a webpage, all you need is:\r\n\r\n<?php\r\necho \"Hello, World!\";\r\n?>\r\n\r\n\r\nBeyond basic output, PHP shines in handling forms and user input. It allows developers to collect data via $_GET and $_POST superglobals. For instance, creating a simple login form involves retrieving user input, validating it, and responding dynamically. Combined with sessions and cookies, PHP can maintain user state across multiple pages, which is essential for login systems, shopping carts, and personalized user experiences.\r\n\r\nAnother cornerstone of PHP is database integration. Using extensions like MySQLi or PDO (PHP Data Objects), developers can connect to databases, retrieve information, and store user data efficiently. For example, an online store can fetch product details from a MySQL database and display them dynamically to users. PHP’s robust support for SQL operations ensures that data-driven applications are both scalable and maintainable.\r\n\r\nPHP also supports object-oriented programming (OOP), allowing developers to write modular, reusable, and maintainable code. Classes, objects, inheritance, and interfaces in PHP help structure large applications, making it easier to manage and expand projects over time. Many modern PHP frameworks like Laravel, Symfony, and CodeIgniter heavily rely on OOP principles. These frameworks provide MVC (Model-View-Controller) architecture, built-in security, and pre-built components that speed up development significantly.\r\n\r\nSecurity is another area where PHP provides tools and best practices. Features like prepared statements in PDO prevent SQL injection attacks, while functions like htmlspecialchars() and filter_input() help sanitize user input, protecting against XSS and other vulnerabilities.\r\n\r\nPHP has evolved to become fast, flexible, and versatile. With the introduction of PHP 7 and later versions, performance improvements, better error handling, and modern language features like type declarations, anonymous classes, and generators make it a competitive choice for backend development. Its large community ensures extensive documentation, tutorials, and third-party libraries, making support easily accessible for developers at all levels.\r\n\r\nIn conclusion, PHP remains a vital tool for web development, combining ease of use, database connectivity, and advanced programming capabilities. Whether you are building a small personal blog or a large-scale enterprise application, PHP provides the tools, flexibility, and community support needed to create dynamic, secure, and high-performance websites. Its ongoing evolution ensures that it will continue to be a mainstay in the web development ecosystem for years to come.', 'https://www.idealwebnetwork.com/uploads/37a2c3241a6a4f1ed061a0a3a78d11b8.jpeg', 'maruf', 'php', '2026-02-14 13:42:42'),
(4, 3, 'What is HTML?m', 'Okay, so this is the only bit of mandatory theory. In order to begin to write HTML, it helps if you know what you are writing.\r\n\r\nHTML is the language in which most websites are written. HTML is used to create pages and make them functional.\r\n\r\nThe code used to make them visually appealing is known as CSS and we shall focus on this in a later tutorial. For now, we will focus on teaching you how to build rather than design.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj5K08rKxUEHZsgxTHElnQc6bFEmuVzD6FUg&s', 'maruf', 'HTML', '2026-02-11 05:00:00'),
(5, 1, 'Abdullah Al Maruf', 'Name: Abdullah Al Maruf\r\nDepartment: Computer Science & Engineering (CSE)\r\n\r\n🎓 Education\r\n\r\nMaruf ekjon CSE student. Programming, database, web development ar problem solving er upor tar strong interest ache. University level e o software development, algorithm, data structure, database management system, web technology er moto subject niye porashona kortese.💻 Technical Skills\r\n🖥️ Programming\r\n\r\nC++ – Competitive programming practice kore, algorithm & logic build korte pochondo kore.\r\n\r\nMemory optimization, Memory Limit Exceeded (MLE) issue niye research korte interested.\r\n\r\nProblem solving skill develop kortese regularly.\r\n\r\n🌐 Web Development\r\n\r\nPHP – Backend development (CRUD operation, database connection, admin panel, contact form, search system).\r\n\r\nMySQL – Database design, table management, data insert/update/delete/fetch.\r\n\r\nHTML, CSS, Bootstrap, Tailwind CSS – Responsive website design.\r\n\r\nBlogging website, Admin panel, Contact management system bananor experience ache.\r\n\r\n⚙️ Project Experience\r\n\r\nBlogging website with admin panel\r\n\r\nContact form with database integration\r\n\r\nPost edit/update/delete system\r\n\r\nSearch & pagination system\r\n\r\nSocial media style front-end design (login, register, dark mode, like, comment system)', 'https://media.licdn.com/dms/image/v2/D5603AQEVDq-yzWSLAA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1698776186308?e=1773273600&v=beta&t=5RCg1jcSepQrFDc5n-D8swChQjLIQyDUPyy_8nQ2Z8Y', 'Abdullah Al Maruf', 'Maruf', '2026-02-20 10:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
