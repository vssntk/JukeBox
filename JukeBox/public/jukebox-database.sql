-- database: JukeBoxMusic --

create table `users`
(
	`userid` int(11) NOT NULL,
    `username` varchar(100) not null,
	`password` varchar(50) not null,
    `email` varchar(100) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


create table `musiclist`
(
	`songid` int(11) NOT NULL,
    `songname` nvarchar(100) not null,
    `singer` nvarchar(100) not null,
    `rate` int(11) not null,
	`imgpath` varchar(100) not null,
    `mp3path` varchar(50) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `musiclist`
  ADD PRIMARY KEY (`songid`);

ALTER TABLE `musiclist`
  MODIFY `songid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

INSERT INTO `users` (`userid`, `username`, `password`, `email`) VALUES 
(1, 'admin1', 'admin1', 'admin1@gmail.com'),
(2, 'admin2', 'admin2', 'admin2@gmail.com'),
(3, 'admin3', 'admin3', 'admin3@gmail.com'),
(4, 'admin4', 'admin4', 'admin4@gmail.com'),
(5, 'admin', '123456', 'admin@gmail.com');

INSERT INTO `musiclist` (`songid`, `songname`, `singer`, `rate`, `imgpath`, `mp3path`) VALUES 
(1, N'Bad Liar', N'Imagine Dragons', 5, 'images/BadLiar.jpg', 'music-list/BadLiar.mp3'),
(2, N'Believer', N'Imagine Dragons', 5, 'images/Believer.jpg', 'music-list/Believer.mp3'),
(3, N'Demons', N'Imagine Dragons', 5, 'images/Demons.jpg', 'music-list/Demons.mp3'),
(4, N'Bones', N'Imagine Dragons', 5, 'images/Bones.jpg', 'music-list/Bones.mp3'),
(5, N'Counting Stars', N'OneRepublic', 5, 'images/CountingStars.jpg', 'music-list/CountingStars.mp3');
