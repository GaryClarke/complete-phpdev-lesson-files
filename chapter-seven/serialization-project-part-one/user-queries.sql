CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    prod_server_access BOOLEAN NOT NULL DEFAULT FALSE,
    dev_server_access BOOLEAN NOT NULL DEFAULT FALSE,
    test_server_access BOOLEAN NOT NULL DEFAULT FALSE,
    prod_data_access BOOLEAN NOT NULL DEFAULT FALSE,
    dev_data_access BOOLEAN NOT NULL DEFAULT FALSE,
    test_data_access BOOLEAN NOT NULL DEFAULT FALSE,
    original_settings TEXT
);