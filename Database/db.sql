DROP DATABASE fswd14_cr12_mount_everest_Laura_Moldovan

/* Create Database */

CREATE DATABASE fswd14_cr12_mount_everest_Laura_Moldovan  DEFAULT CHARACTER SET utf8;


/* Create Table */

CREATE TABLE places(
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   price DECIMAL(10,2),
   description TEXT,
   longitude DECIMAL(7,7),
   latitude DECIMAL(7,7),
   picture VARCHAR(50)
)

/* Insert values */

INSERT INTO places
VALUES
(1, "Mount Everest", 459.90, "Mount Everest is Earth's highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas.", 27.9924576, 86.8869636, "everest.jpg"),
(2, "The Grand Canyon", 578.50, "The Grand Canyon is a steep-sided canyon carved by the Colorado River in Arizona, United States.", 36.0922145, -113.4036375, "canion.jpg"),
(3, "Great Pyramid of Giza",  430, "The Great Pyramid of Giza (also known as the Pyramid of Khufu or the Pyramid of Cheops) is the oldest and largest of the pyramids in the Giza pyramid complex bordering present-day Giza in Greater Cairo, Egypt. It is the oldest of the Seven Wonders of the Ancient World, and the only one to remain largely intact.", 29.9792391, 31.1320132, "piramid.jpg"),
(4, "Disneyland", 175.90, "Disneyland Paris, is an entertainment resort that encompasses two theme parks, many resort hotels, Disney Nature Resorts, a shopping, dining, and entertainment complex, and a golf course, in addition to several additional recreational and entertainment venues.", 48.8673893, 2.7814043, "disney.jpg"),
(5, "Machu Picchu", 489.90, "Machu Picchu is a 15th-century Inca citadel. The Urubamba River flows past it, cutting through the Cordillera and creating a canyon with a tropical mountain climate.", 13.2085011, -72.6319845, "macpic.jpg"),
(6, "Great Wall of China", 1099.90, "The Great Wall of China is a series of fortifications that were built across the historical northern borders of ancient Chinese states and Imperial China as protection against various nomadic groups from the Eurasian Steppe. ", 40.4319118, 116.5681862, "wall.jpg"),
(7, "Ochiul Bei", 350, "Ochiul Beiului este un lac carstic cu o suprafață de 284 m² în apropierea Cascadelor Beușniței de pe pârâul Beu, în Parcul Național Cheile Nerei-Beușnița.", 44.936293, 21.7881191, "ochi.jpg"),
(8, "Cascada Bigar", 215, "Bigăr was one of the most unusual waterfalls in the world and one of the most beautiful in Romania, according to The World Geography.", 44.9696731, 21.8114711, "bigar.jpg"),
(9, "Babele", 450, "Babele is one of the most popular tourist destinations in the country. The name comes from some mushroom shaped rock formations, the result of erosion and varying hardness of the rock layers.", 45.4333475, 25.4579119, "babe.jpg");



