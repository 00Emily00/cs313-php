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











































