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