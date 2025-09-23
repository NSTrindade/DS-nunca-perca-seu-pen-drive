-- 1. Cria o banco de dados (se não existir)
CREATE DATABASE IF NOT EXISTS escola_musica_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- 2. Usa o banco de dados criado
USE escola_musica_db;

-- 3. Tabela de Usuários (para Login/Admin)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin', 'professor') NOT NULL DEFAULT 'admin',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Tabela de Professores
CREATE TABLE professores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(20),
    data_contratacao DATE
);

-- 5. Tabela de Instrumentos (Ex: Violão, Piano, Bateria)
CREATE TABLE instrumentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);

-- 6. Tabela de Cursos
CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    instrumento_id INT,
    descricao TEXT,
    nivel ENUM('iniciante', 'intermediario', 'avancado') NOT NULL,
    FOREIGN KEY (instrumento_id) REFERENCES instrumentos(id)
        ON DELETE SET NULL -- Se o instrumento for apagado, o curso fica sem
);

-- 7. Tabela de Alunos
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(20),
    data_nascimento DATE,
    data_cadastro DATE NOT NULL
);

-- 8. Tabela de Turmas
CREATE TABLE turmas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curso_id INT NOT NULL,
    professor_id INT NOT NULL,
    horario VARCHAR(100) NOT NULL, -- Ex: "Segundas e Quartas, 18h-19h"
    sala VARCHAR(50),
    max_alunos INT DEFAULT 10,
    status ENUM('aberta', 'completa', 'em_andamento', 'concluida') DEFAULT 'aberta',
    FOREIGN KEY (curso_id) REFERENCES cursos(id)
        ON DELETE CASCADE, -- Se o curso for apagado, a turma também é
    FOREIGN KEY (professor_id) REFERENCES professores(id)
        ON DELETE CASCADE -- Se o professor for apagado, a turma também é
);

-- 9. Tabela de Matrículas (Tabela associativa entre Aluno e Turma)
CREATE TABLE matriculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    turma_id INT NOT NULL,
    data_matricula DATE NOT NULL,
    status ENUM('ativa', 'inativa', 'concluida') DEFAULT 'ativa',
    
    -- Chave única para impedir que o mesmo aluno se matricule na mesma turma duas vezes
    UNIQUE KEY uk_aluno_turma (aluno_id, turma_id), 
    
    FOREIGN KEY (aluno_id) REFERENCES alunos(id)
        ON DELETE CASCADE, -- Se o aluno for excluído, sua matrícula é cancelada
    FOREIGN KEY (turma_id) REFERENCES turmas(id)
        ON DELETE CASCADE -- Se a turma for excluída, a matrícula é cancelada
);


-- DADOS DE EXEMPLO (OPCIONAL):

-- 10. Inserir um usuário admin padrão
-- IMPORTANTE: A senha é 'admin123'. Isso usa password_hash() do PHP.
INSERT INTO usuarios (nome, email, senha, tipo) 
VALUES ('Admin Principal', 'admin@escola.com', '$2y$10$o.eCy/S4CFEwT1eEuNy9S.p1kZfuRe/btkGjLpI5o0LdEwobYbK3a', 'admin');

-- 11. Inserir instrumentos
INSERT INTO instrumentos (nome) VALUES ('Violão'), ('Piano'), ('Bateria'), ('Canto'), ('Guitarra');

show tables;

DELETE FROM usuarios WHERE email = 'admin@escola.com';

INSERT INTO usuarios (nome, email, senha, tipo) 
VALUES ('Admin Principal', 'admin@escola.com', '$2y$10$o.eCy/S4CFEwT1eEuNy9S.p1kZfuRe/btkGjLpI5o0LdEwobYbK3a', 'admin');

select * from usuarios;