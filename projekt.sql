SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (`id` int(11) NOT NULL, `login` varchar(100) NOT NULL, `pass` varchar(100) NOT NULL) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `users` (`id`, `login`, `pass`) VALUES (1, 'John', 'John');

ALTER TABLE `users` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`login`);
ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
