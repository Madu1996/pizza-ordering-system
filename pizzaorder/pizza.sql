
CREATE TABLE `pizza` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cn` varchar(10) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `d` varchar(10) NOT NULL,
  `pt` varchar(20) NOT NULL,
  `ps` varchar(10) NOT NULL,
  `q` int(4) NOT NULL,
  `s` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


INSERT INTO `pizza` VALUES 
(24,'isuru','0711234567','97000000V','2020.07.01','chillie chicken','large',2,'new order'),
(25,'isuri','0711234567','97000070V','2020.07.01','spicy','small',4,'new order'),
(26,'nisha','0711234568','97000070V','2020.07.02','chillie chicken','small',5,'new order'),
(27,'nipun','0711234568','97000010V','2020.07.02','cheese','medium',1,'new order'),
(28,'nisha','0711234567','97000030V','2020.07.02','chillie chicken','large',4,'new order'),
(58,'nisha','0711234567','20021489564165V','2020.06.21','cheese','small',5,'new order');


CREATE TABLE `price` (
  `pt` varchar(20) NOT NULL,
  `ps` varchar(10) NOT NULL,
  `p` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `price` VALUES 
('chillie chicken','small',500),
('chillie chicken','medium',750),
('chillie chicken','large',1200),
('spicy','small',550),
('spicy','medium',800),
('spicy','large',1300),
('cheese','small',650),
('cheese','medium',900),
('cheese','large',1550);
