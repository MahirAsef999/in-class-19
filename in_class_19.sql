CREATE TABLE countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

INSERT INTO countries (country_name, description) VALUES
('Argentina', 'Capital: Buenos Aires'),
('Bolivia', 'Capital: Sucre'),
('Brazil', 'Capital: Brasília'),
('Chile', 'Capital: Santiago'),
('Colombia', 'Capital: Bogotá'),
('Ecuador', 'Capital: Quito'),
('Guyana', 'Capital: Georgetown'),
('Paraguay', 'Capital: Asunción'),
('Peru', 'Capital: Lima'),
('Suriname', 'Capital: Paramaribo'),
('Uruguay', 'Capital: Montevideo'),
('Venezuela', 'Capital: Caracas');