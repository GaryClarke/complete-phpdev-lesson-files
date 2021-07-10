DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `body` text DEFAULT NULL,
  `publication_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO `review` (`id`, `product_id`, `rating`, `body`, `publication_date`) VALUES
(1, 1, 5, 'This printer is incredible! I printed another 3D printer with it...it\'s like 2 for the price of 1! ', '2020-03-19 12:00:00'),
(2, 1, 3, 'Came without any ink...slightly disappointed.', '2021-06-29 21:32:44'),
(3, 1, 3, 'Terrible build quality - didnt even get mine set up before threw in the towel.', '2018-06-12 12:00:00'),
(4, 1, 4, 'La cura dei dettagli si vede già dall\'imballaggio, tutto perfettamente protetto e incelophanato. La stampante è da montare ma è davvero molto semplice, le istruzioni sono fatte molto bene e si monta in 15 minuti.', '2018-08-12 12:00:00'),
(5, 1, 4, 'The construction was relatively uncomplicated and was done in about 60 minutes.\nJust follow the enclosed, well-documented instructions.\nThere is a good, extensive video on this topic on YouTube.', '2018-12-15 12:00:00'),
(6, 1, 5, 'This is an unbelievably good printer for the price. I\'ve had it for 2 weeks now and I\'ve been printing with it almost non-stop. I\'ve had zero issues with it.', '2018-07-16 12:00:00'),
(7, 1, 1, 'Great printer, poor customer service. The star reduction is strictly for the service response.', '2018-02-19 12:00:00'),
(8, 1, 4, NULL, '2021-06-29 21:37:18'),
(9, 1, 5, NULL, '2021-06-29 21:37:51'),
(10, 1, 2, NULL, '2019-04-12 12:00:00');