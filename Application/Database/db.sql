CREATE TABLE `users`(
    `name` varchar(255) NOT NULL,
    `email` varchar(255) PRIMARY KEY,
    `password` varchar(255) NOT NULL,
    `privilege` tinyint UNSIGNED DEFAULT 0 CHECK( `privilege` < 10 )  
)DEFAULT CHARSET = UTF8;