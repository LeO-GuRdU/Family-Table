CREATE DATABASE Family;
USE Family;
CREATE TABLE FamilyMembers
(
    MemberID int unsigned NOT NULL auto_increment PRIMARY KEY,
    FirstName varchar(80) NOT NULL,
    LastName varchar(80) NOT NULL,
    Age int(3) unsigned NOT NULL,
    Gender ENUM ('Hombre','Mujer') NOT NULL,
    Relationship varchar(80) NOT NULL
);
INSERT INTO FamilyMembers VALUES
(NULL, 'Elene','Holanda',33,'Mujer','Pareja');