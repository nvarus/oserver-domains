CREATE DATABASE Music_Collection;
USE Music_Collection;

CREATE TABLE Song_list (
	                       id int AUTO_INCREMENT PRIMARY KEY,
	                       song_title varchar(50) NOT NULL,
	                       artist varchar(50) NULL,
	                       album varchar(50) NULL,
	                       favourites bool DEFAULT FALSE,
	                       length time NULL
);

INSERT INTO Song_list (song_title, artist, album, favourites, length) VALUE (
	'Sweet Candy', 'AC/DC', 'Rock or Bust', FALSE, '3:09');

INSERT INTO Song_list (song_title, artist, album, favourites, length) VALUE (
	'Devil`s Dance', 'Metallica', 'Reload', FALSE, '5:18');

INSERT INTO Song_list (song_title, artist, album, favourites, length) VALUE (
	'Wo geht der Teufel hin', 'Eisbrecher', 'Ewiges Eis - 15', FALSE, '4:54');