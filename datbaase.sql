CREATE DATABASE IF NOT EXISTS galgje;
USE galgje;

CREATE TABLE IF NOT EXISTS woorden (
    id INT AUTO_INCREMENT PRIMARY KEY,
    woord VARCHAR(255) NOT NULL
);

-- Voeg voorbeeldwoorden toe
INSERT INTO woorden (woord) VALUES
('computer'),
('programmeren'),
('school'),
('database'),
('php');