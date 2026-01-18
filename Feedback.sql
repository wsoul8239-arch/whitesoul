USE web_fp;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    role ENUM('student','lecturer','admin')
);

-- Feedback table
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    lecturer_name VARCHAR(100),
    category VARCHAR(100),
    rating VARCHAR(20),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Complaints table
CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    complaint_text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create default admin
INSERT INTO users (name, email, password, role)
VALUES ('Admin', 'admin@gmail.com', '1234', 'admin');