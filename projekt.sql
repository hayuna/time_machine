SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `tasks` (
	`Task_ID` int(11) NOT NULL,
	`Name_of_task` varchar(50) NOT NULL,
	`Start_task` datetime NOT NULL,
	`End_task` datetime NOT NULL,
	`user` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `users` (
	`User_ID` int(11) NOT NULL,
  	`Name` varchar(20) NOT NULL,
  	`Surname` varchar(20) NOT NULL,
  	`Login` varchar(15) NOT NULL,
  	`Password` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `users` (`User_ID`, `Name`, `Surname`, `Login`, `Password`) VALUES
	(1, 'John', 'Doe', 'John', 'John'),
	(2, 'Jan', 'Kowalski', 'admin', 'admin');

ALTER TABLE `tasks` ADD PRIMARY KEY (`Task_ID`);
ALTER TABLE `users` ADD PRIMARY KEY (`User_ID`), ADD UNIQUE KEY `login` (`Name`);
ALTER TABLE `tasks` MODIFY `Task_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
ALTER TABLE `users` MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;