CREATE TABLE users(
   usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
   usersName varchar(128) NOT NULL,
   usersEmail varchar(128) NOT NULL,
   usersUid varchar(128) NOT NULL,
   usersPwd varchar(128) NOT NULL,
   usersCode varchar(128) NOT NULL,
   usersVerify varchar(128) NOT NULL
);

CREATE TABLE adminAcc (
	adminAcc int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	adminAccName varchar(128) NOT NULL,
	adminAccBranch varchar(128) NOT NULL,
	adminAccEmail varchar(128) NOT NULL,
	adminAccUid varchar(128) NOT NULL,
	adminAccPwd varchar(128) NOT NULL
);

INSERT INTO `adminAcc` (`adminAccName`, `adminAccBranch`, `adminAccEmail`, `adminAccUid`, `adminAccPwd`) VALUES
('admin malinao', 'Malinao', 'mcyadminmalinao@gmail.com', 'adminmalinao', '$2y$10$PfyxaGIDgdC1cnHoWnYL/ujTyVF.LCeAIJstWDNBnwzpAJqKQp35K'),
('admin pinagbuhatan', 'Pinagbuhatan', 'mcyadminpinag@gmail.com', 'adminpinag', '$2y$10$y854VLh1TCk38hlxKZRWoupky19VyvUD.odAO9u5xzMg6wJT.GiIC'),
('admin san joaquin', 'San Joaquin', 'mcyadminsq@gmail.com', 'adminsq', '$2y$10$3lrUKyYgwuh/HfE0Xn.VSeQvmWszO2jURYocwOOa/CC9GQDtprv9W'),
('admin main', 'mainAdmin', 'mainadminMcy@gmail.com', 'adminmain', '$2y$10$dFggUbzUfFcd3hE1Gn5QSurcuDfTWJyqAC0nDbej0RBjWqeJ8MUKy');

-- Malinao			 Username: adminmalinao 				password: adminmalinao15
-- Pinagbuhatan		 Username: adminpinag 					password: mcypinag16
-- San Joaquin		 Username: adminsq 						password: adminsq12
-- Main admin		 Username: adminmain 					password: mcymainadmin34


CREATE TABLE booking (
	bookingId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	bookingUsername varchar(128) NOT NULL,
	bookingName varchar(128) NOT NULL,
	bookingemail varchar(128) NOT NULL,
	bookingGender varchar(128) NOT NULL,
	bookingDate varchar(128) NOT NULL,
	bookingTime varchar(128) NOT NULL,
	bookingConsultation varchar(128) NOT NULL,
	bookingBranch varchar(128) NOT NULL,
	bookingMessage varchar(300) NOT NULL,
	bookingStatus varchar(128) NOT NULL
);

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('gajanand.kgn@rediffmail.com', 'f53997f1a58352e1fe65046d6953672562bc648b72', '2020-12-30 11:05:26');


CREATE TABLE emails (
	emailId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	emailReceiver varchar(128) NOT NULL,
	emailSubject varchar(128) NOT NULL,
	emailBody varchar(1000) NOT NULL,
	emailDate varchar(128) NOT NULL,
	emailTime varchar(128) NOT NULL
);


CREATE TABLE contactus (
	concernId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	concernName varchar(128) NOT NULL,
	concernEmail varchar(128) NOT NULL,
	concernSubject varchar(128) NOT NULL,
	concernBody varchar(1000) NOT NULL,
	concernDate varchar(128) NOT NULL,
	concernTime varchar(128) NOT NULL,
);

--- TABLE FOR EVENTS ----

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;