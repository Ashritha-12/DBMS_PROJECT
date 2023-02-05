Back-End:
1) Install Xampp and start the apache as well as SQL.

2) Go to the broswer and type 'localhost' in the url after starting ur xampp.

3) A phpMyAdmin option will be avaliable on the top right side of the webpage, click on it which opens the mysql database
 
4) Create the database named 'mahi'

5) Create the following tables: admin, customer, movies, shows.

6) The structure of the tables are given in the power point presentation, please make them accordingly(you can also refer to the bottom of this page for sql queries to create all the tables).

7) Execute the following sql queries in 'movies' table:
INSERT INTO `movies` (`m_id`, `m_name`, `genre`, `imdb_rating`, `synopsis`, `lang`) VALUES ('E001', 'Dune', ' Action , Science Fiction , Adventure , Drama , Fantasy', '8.1', 'Dune Is A 2021 American Epic Science Fiction Film Directed By Denis Villeneuve And Written By Villeneuve, Jon Spaihts, And Eric Roth. It Is The First Of A Two-Part Adaptation Of The 1965 Novel By Frank Herbert, Primarily Covering The First Half Of The Book. Set In The Far Future, It Follows Paul Atreides As His Family, The Noble House Atreides, Is Thrust Into A War For The Deadly And Inhospitable Desert Planet Arrakis.', 'English') 
INSERT INTO `movies` (`m_id`, `m_name`, `genre`, `imdb_rating`, `synopsis`, `lang`) VALUES ('E002', 'Eternals', ' Action , Science Fiction , Adventure , Drama , Fantasy , Superhero', '6.8', 'Following the events of Avengers: Endgame (2019), an unexpected tragedy forces the Eternals, ancient aliens who have been living on Earth in secret for thousands of years, out of the shadows to reunite against mankind\'s most ancient enemy, the Deviants.', 'English')
INSERT INTO `movies` (`m_id`, `m_name`, `genre`, `imdb_rating`, `synopsis`, `lang`) VALUES ('H001', 'Antim: The Final Truth', 'Action, Crime, Drama', '7.1', 'After witnessing the pain and suffering his family went through, a farmer\'s son rises to power as he starts his journey as a gangster and spirals into a dark game of politics and power, meanwhile a strict cop starts following his trail to stop him before he becomes all powerful in the city.', 'Hindi')
INSERT INTO `movies` (`m_id`, `m_name`, `genre`, `imdb_rating`, `synopsis`, `lang`) VALUES ('T001', 'Akhanda', '\r\nAction, Drama', '7.9', 'Balakrishna plays a fierce devotee of Lord Shiva, who stands tall against evildoers.', 'Telugu')

8) While filling in some manual entries in the 'customer' table keep in mid to have one of the above mentioned movie id (m_id) to have exact results while viewing booked ticket in customer login page. 

9)In the 'shows' table have 'E001' as the movie id (m_id) with multiple dates to it and corresponding seat numbers.
 

Front-End:
1) Copy the Mahi folder in the zip file and place it under your 'htdocs' folder which is present wherever you have installed your xampp.

2) Once done with above mentioned all steps type "localhost/Mahi/mainpage.php" in your browser url which will open the Main page. 

3) From the main page you surf through the different pages and facilities.






SQL QUERIES FOR CREATING TABLES IN `mahi` table :

CREATE TABLE `admin` (
 `adno` int(11) NOT NULL,
 `username` varchar(25) NOT NULL,
 `pwd` varchar(25) NOT NULL,
 PRIMARY KEY (`adno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


CREATE TABLE `customer` (
 `c_id` int(11) NOT NULL AUTO_INCREMENT,
 `c_name` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `phno` varchar(10) NOT NULL,
 `m_id` varchar(100) NOT NULL,
 UNIQUE KEY `c_id` (`c_id`),
 UNIQUE KEY `c_id_2` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4


CREATE TABLE `movies` (
 `m_id` varchar(10) NOT NULL,
 `m_name` varchar(50) NOT NULL,
 `genre` varchar(100) DEFAULT NULL,
 `imdb_rating` decimal(10,1) DEFAULT NULL,
 `synopsis` varchar(500) DEFAULT NULL,
 `lang` varchar(10) NOT NULL DEFAULT 'Hindi',
 PRIMARY KEY (`m_id`),
 UNIQUE KEY `m_id` (`m_id`),
 KEY `m_id_2` (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


CREATE TABLE `shows` (
 `m_id` varchar(10) NOT NULL,
 `date` date NOT NULL,
 `seats` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
