CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username varchar(50) NOT NULL UNIQUE,
    password varchar(255) NOT NULL
);