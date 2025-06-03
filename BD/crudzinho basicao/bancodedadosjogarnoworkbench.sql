create database 2ds;
use 2ds;
CREATE TABLE usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
email VARCHAR(100)
);
INSERT INTO usuarios (nome, email) VALUES
('João Silva', 'joao@email.com'),
('Maria Souza', 'maria@email.com'),
('Carlos Mendes', 'carlos@email.com'),
('Ana Paula', 'ana@email.com'),
('Felipe Costa', 'felipe@email.com'),
('Laura Martins', 'laura@email.com'),
('Pedro Henrique', 'pedro@email.com'),
('Bruna Lima', 'bruna@email.com'),
('Ricardo Alves', 'ricardo@email.com'),
('Fernanda Dias', 'fernanda@email.com');