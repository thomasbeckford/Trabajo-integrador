CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(30) NOT NULL,
 `email` varchar(60) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `userEmail` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8



------Checkear todas estas---------


CREATE TABLE IF NOT EXISTS Categories (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  type VARCHAR(80) NOT NULL,
);

CREATE TABLE IF NOT EXISTS Brands (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL,
);

CREATE TABLE IF NOT EXISTS Products (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL,
  price DECIMAL NOT NULL,
  description TEXT,
  id_brand NOT NULL,
  id_category NOT NULL,
  image TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS Transactions (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  id_users id INT UNSIGNED NOT NULL,
  id_products INT UNSIGNED NOT NULL,
  transaction
);
