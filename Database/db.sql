DROP DATABASE fswd14_cr12_mount_everest_Laura_Moldovan

/* Create Database */

CREATE DATABASE fswd14_cr12_mount_everest_Laura_Moldovan  DEFAULT CHARACTER SET utf8;


/* Create Table */

CREATE TABLE places(
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   price DECIMAL(10,2),
   description TEXT,
   latitude DECIMAL(8,6),
   longitude DECIMAL(9,6),
   picture VARCHAR(50)
)

/* Insert values */

INSERT INTO places
VALUES
(1, "Mount Everest", 459.90, "Mount Everest is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas.", 27.99017, 86.92472, "everest.jpg"),
(2, "The Grand Canyon", 578.50, "The Grand Canyon is a steep-sided canyon carved by the Colorado River in Arizona, United States.", 36.06220, -112.13664, "canion.jpg"),
(3, "Great Pyramid of Giza",  430, "The Great Pyramid of Giza (also known as the Pyramid of Khufu or the Pyramid of Cheops) is the oldest and largest of the pyramids in the Giza pyramid complex bordering present-day Giza in Greater Cairo, Egypt. It is the oldest of the Seven Wonders of the Ancient World, and the only one to remain largely intact.", 29.97755, 31.13250, "piramid.jpg"),
(4, "Disneyland", 175.90, "Disneyland Paris, is an entertainment resort that encompasses two theme parks, many resort hotels, Disney Nature Resorts, a shopping, dining, and entertainment complex, and a golf course, in addition to several additional recreational and entertainment venues.", 48.86757, 2.78358, "disney.jpg"),
(5, "Machu Picchu", 489.90, "Machu Picchu is a 15th-century Inca citadel. The Urubamba River flows past it, cutting through the Cordillera and creating a canyon with a tropical mountain climate.", -13.16179, -72.54502, "macpic.jpg"),
(6, "Great Wall of China", 1099.90, "The Great Wall of China is a series of fortifications that were built across the historical northern borders of ancient Chinese states and Imperial China as protection against various nomadic groups from the Eurasian Steppe. ", 40.43421, 116.57009, "wall.jpg"),
(7, "Ochiul Bei", 350, "Ochiul Beiului este un lac carstic cu o suprafață de 284 m² în apropierea Cascadelor Beușniței de pe pârâul Beu, în Parcul Național Cheile Nerei-Beușnița.", 44.93649, 21.79031, "ochi.jpg"),
(8, "Cascada Bigar", 215, "Bigăr was one of the most unusual waterfalls in the world and one of the most beautiful in Romania, according to The World Geography.", 45.00813, 21.95992, "bigar.jpg"),
(9, "Babele", 450, "Babele is one of the most popular tourist destinations in the country. The name comes from some mushroom shaped rock formations, the result of erosion and varying hardness of the rock layers.", 45.43472, 25.46701, "babe.jpg");



