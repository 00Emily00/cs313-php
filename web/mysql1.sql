CREATE TABLE users
(
    userId SERIAL PRIMARY KEY
    , username VARCHAR(50) UNIQUE NOT NULL
    , pasword VARCHAR(50) NOT NULL
);
CREATE TABLE pictures 
(
    pictureId SERIAL PRIMARY KEY
    , filepath VARCHAR(100) UNIQUE NOT NULL
    , name VARCHAR(50) UNIQUE NOT NULL
);
CREATE TABLE questions
(
    questionId SERIAL PRIMARY KEY
    , questions VARCHAR(600) NOT NULL
);
CREATE TABLE answers
(
    answerId SERIAL PRIMARY KEY
    , answers VARCHAR(600) NOT NULL
);
CREATE TABLE questionAnswer
(
    qaId SERIAL PRIMARY KEY
    , qId SMALLINT REFERENCES questions(questionId)
    , aId SMALLINT REFERENCES answers(answerId)
    , iscorrect BIT NOT NULL
);











































