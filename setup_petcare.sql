CREATE DATABASE IF NOT EXISTS petcare_db;
USE petcare_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS pets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    species VARCHAR(100),
    breed VARCHAR(100),
    age VARCHAR(50),
    image_path VARCHAR(255),
    status VARCHAR(50) DEFAULT 'Available'
);

CREATE TABLE IF NOT EXISTS adoptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    pet_id INT,
    adoption_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50) DEFAULT 'Approved',
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (pet_id) REFERENCES pets(id)
);

-- Seed Pets (Data from adopt.html)
INSERT INTO pets (name, species, breed, age, image_path) VALUES
('Buddy', 'Dog', 'Golden Retriever', '2 years old', 'images/dog.png'),
('Sky', 'Bird', 'Blue Parrot', '3 years old', 'images/parrot.png'),
('Snowball', 'Rabbit', 'White Rabbit', '6 months old', 'images/rabbit.png'),
('Daisy', 'Bird', 'Domestic Duck', '1 year old', 'images/duck.png'),
('Coco', 'Other', 'Koala', '2 years old', 'images/koala.png'),
('Misty', 'Cat', 'Persian Cat', '1 year old', 'images/cat1.png'),
('Shelly', 'Reptile', 'Brown Turtle', '3 years old', 'images/turtle.png'),
('Pearl', 'Bird', 'White Pigeon', '2 years old', 'images/pigeon.png'),
('Spike', 'Small Pet', 'Golden Hedgehog', '1 year old', 'images/hedgehog.png'),
('Chipo & His Chirpy', 'Bird', 'Budgie', '1 year old', 'images/budgie.png'),
('Hoot', 'Bird', 'Barn Owl', '4 years old', 'images/owl.png'),
('Choco', 'Small Pet', 'Golden Hamster', '8 months old', 'images/hamster.png'),
('Sunny', 'Bird', 'Cockatiel', '2 years old', 'images/koktail.png');
