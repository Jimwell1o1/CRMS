CREATE TABLE users(
   usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
   usersName varchar(128) NOT NULL,
   usersEmail varchar(128) NOT NULL,
   usersUid varchar(128) NOT NULL,
   usersPwd varchar(128) NOT NULL

);

CREATE TABLE adminAcc (
	adminAcc int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	adminAccName varchar(128) NOT NULL,
	adminAccBranch varchar(128) NOT NULL,
	adminAccEmail varchar(128) NOT NULL,
	adminAccUid varchar(128) NOT NULL,
	adminAccPwd varchar(128) NOT NULL
);


CREATE TABLE booking (
	bookingId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	bookingUsername varchar(128) NOT NULL,
	bookingName varchar(128) NOT NULL,
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
	emailTime varchar(128) NOT NULL,
);
