CREATE DATABASE SQLDBEXAM;
USE SQLDBEXAM;
CREATE TABLE Student (
    id INT IDENTITY (1, 1) NOT NULL,
    first_name NVARCHAR(50) NOT NULL,
    last_name NVARCHAR(50) NOT NULL,
    flags INT,
    CONSTRAINT [PK_Student] PRIMARY KEY CLUSTERED([id] ASC) ON [PRIMARY]
);

CREATE TABLE Exam(
    id INT IDENTITY (1, 1) NOT NULL,
    student_id INT NOT NULL,
    grade INT NOT NULL,
    CONSTRAINT [PK_Exam] PRIMARY KEY CLUSTERED([id] ASC) ON [PRIMARY],
    CONSTRAINT [FK_StudentExam] FOREIGN KEY(student_id) REFERENCES Student(id)
);

INSERT INTO Student(first_name, last_name) VALUES('Huy', 'Tran');
INSERT INTO Student(first_name, last_name) VALUES('Hoa', 'Nguyen');
INSERT INTO Student(first_name, last_name) VALUES('Ngoan', 'Tran');
INSERT INTO Student(first_name, last_name) VALUES('Linh', 'Le');
INSERT INTO Student(first_name, last_name) VALUES(N'Trường', N'Nguyễn');
INSERT INTO Student(first_name, last_name) VALUES(N'Trường', N'Trần');

INSERT INTO Exam(student_id, grade) VALUES(1, 40);
INSERT INTO Exam(student_id, grade) VALUES(2, 50);
INSERT INTO Exam(student_id, grade) VALUES(3, 90);
INSERT INTO Exam(student_id, grade) VALUES(4, 10);

SELECT [S].id, [S].first_name, [S].last_name, [K].grade, 
CASE WHEN [K].grade >= 80 THEN 'excellent'
    WHEN [K].grade >= 50 THEN 'pass'
 ELSE 'fail' END AS [Status]
FROM Exam [K]
INNER JOIN Student [S] ON [K].student_id = [S].id

CREATE TABLE Course(
    id INT IDENTITY (1, 1) NOT NULL,
    name NVARCHAR(500) NOT NULL,
    CONSTRAINT [PK_Course] PRIMARY KEY CLUSTERED([id] ASC) ON [PRIMARY]
)

SELECT * FROM Student WHERE first_name LIKE N'Trường'

CREATE TABLE Teacher(
    id INT IDENTITY (1, 1) NOT NULL,
    first_name NVARCHAR(50) NOT NULL,
    last_name NVARCHAR(50) NOT NULL,
    CONSTRAINT [PK_Teacher] PRIMARY KEY CLUSTERED([id] ASC) ON [PRIMARY]
)

ALTER TABLE Course
ADD teacher_id INT NOT NULL

ALTER TABLE Course
ADD CONSTRAINT [FK_TeacherCourse] 
FOREIGN KEY (teacher_id) REFERENCES Teacher(id)