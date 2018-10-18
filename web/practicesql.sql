
//user is name of table //commas are new columns
CREATE TABLE audio
(
    id SERIAL PRIMARY KEY
    , filepath VARCHAR(100) UNIQUE NOT NULL
    , name VARCHAR(50) UNIQUE NOT NULL
);
CREATE TABLE questions
(
    id SERIAL PRIMARY KEY
    , question VARCHAR(150) NOT NULL
    , audioid SMALLINT
    , FOREIGN KEY(audioid) REFERENCES audio(id) //audioid and id in audio relate
    , picturesid SMALLINT
    , FOREIGN KEY(picturesid) REFERENCES pictures(id) //not creating new table
);
CREATE TABLE animals 
(
    id SERIAL PRIMARY KEY
    , animal VARCHAR(50) NOT NULL
    
);
CREATE TABLE answers
(
    id SERIAL PRIMARY KEY
    , rightanswer VARCHAR(50) NOT NULL
    , wronganswer1 VARCHAR(50) NOT NULL
    , wronganswer2 VARCHAR(50) NOT NULL
    , wronganswer3 VARCHAR(50) NOT NULL
);

CREATE TABLE scriptures (
      id SERIAL PRIMARY KEY
    , book VARCHAR(150) NOT NULL
    , chapter INT(150) NOT NULL
    , verse  INT(150) NOT NULL
    , content TEXT(500) NOT NULL

);

INSERT INTO scriptures(book, chapter, verse, content) VALUES ('John',1,5,' That was the true Light, which lighteth every man that cometh into the world.'), ('Doctrine and Covenants',88,49,'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),('Doctrine and Covenants 93:',93,28,'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),('Mosiah',16,9,'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');