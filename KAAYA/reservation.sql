CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    theme VARCHAR(255),
    name VARCHAR(255),
    date DATE,
    time TIME,
    day VARCHAR(50),
    background VARCHAR(255)
);
