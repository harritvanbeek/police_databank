CREATE TABLE `warrants` (
  `id` int(11) NOT NULL,
  `citizenid` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `warrants` (`id`, `citizenid`, `description`, `title`, `author`, `created`) VALUES
(34, 'OJH87129', 'Dossiernr:#1207<br />\r\nbsn:ojh87129<br />\r\nNaam persoon: Exx gijs<br />\r\nReden bevel:moord collega buiten dienst[Boa Cheng] ontvoering collega buiten dienst[ian houwen] moord burger [Kees Milf]<br />\r\n<br />\r\nDatum Bevel: 20/02/2022 tijd:21:47', 'arrestatie bevel Exx gijs', 'John van Vliet', '2022-02-20 21:50:53');

ALTER TABLE `warrants`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `warrants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;