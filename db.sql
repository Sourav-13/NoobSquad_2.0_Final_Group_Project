DROP TABLE IF EXISTS item_t;
DROP TABLE IF EXISTS user_t;
DROP TABLE IF EXISTS appointment_t;

CREATE TABLE item_t (
    itemID INTEGER NOT NULL AUTO_INCREMENT,
    img_url VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    CONSTRAINT item_t PRIMARY KEY (itemID)
);

CREATE TABLE user_t (
    userID INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,

    CONSTRAINT user_t PRIMARY KEY (userID)
);

CREATE TABLE appointment_t (
    appointmentID INTEGER NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    

    CONSTRAINT appointment_t PRIMARY KEY (appointmentID)
);

INSERT INTO user_t(name, email, password) VALUES
('admin', 'admin@gmail.com', 'admin');
