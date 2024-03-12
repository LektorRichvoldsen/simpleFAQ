CREATE DATABASE faq;

CREATE TABLE question (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(100) NOT NULL,
    question text,
    date_asked datetime,
    PRIMARY KEY (ID)
);

INSERT INTO question (username, question, date_asked) VALUES ("erikPerik", "Hvordan kan man putte data inn i databasen?", CURDATE());
INSERT INTO question (username, question, date_asked) VALUES ("erikPerik", "Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst. Her skal jeg teste med masse tekst.", CURDATE());