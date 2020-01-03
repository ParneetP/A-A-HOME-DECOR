@ -106,7 +106,7 @@ CREATE TABLE `user` (
  `user_contact` varchar(12) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) 
  `user_password` varchar(30) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;