-- Create tables
CREATE TABLE chal1 (
    id INT,
    username VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE chal2 (
    id INT,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO chal1 (username, password)
VALUES ("admin", "kqjwihdqwewqdasihcisgnihbe12414i3252h5u252342h4iuh2saidahd7ysaydcvhba");

INSERT INTO chal2 (username, password)
VALUES ("admin", "HKN{th1s_1s_th3_fl4g}");


-- Create users
CREATE USER 'chal1' @'%' IDENTIFIED BY 'MVoKcX8ZivUO3VUh330GqwlemIZSpHVl';
GRANT SELECT ON sqlchal.chal1 TO 'chal1' @'%' WITH
GRANT OPTION;
CREATE USER 'chal2' @'%' IDENTIFIED BY '0oVZRRyGePttOtTTWJ27ixdZAD3KJmAM';
GRANT SELECT ON sqlchal.chal2 TO 'chal2' @'%' WITH
GRANT OPTION;