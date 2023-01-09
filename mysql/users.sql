CREATE TABLE `users` (
  `uuid` char(64) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`uuid`, `username`, `password`, `name`, `role`, `rank`, `last_login`) VALUES
('46ffac79-86ec-4774-ac97-c6463a7dab7d', 'admin', '$2y$12$DzhqW/8NAtSwYUGU1uJyWeFeXofyylx1BByVvRYMWxGvUwrlsAPzu', 'admin', 'admin', 'eerste hoofdcommissaris', '0000-00-00'),


ALTER TABLE `users`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `users` ADD `callsign` CHAR(5) NOT NULL AFTER `name`;
ALTER TABLE `users` ADD `premission` CHAR(255) NOT NULL DEFAULT '{\"edit\":"\false\",\"deleted\":"\false\"}' AFTER `last_login`;
