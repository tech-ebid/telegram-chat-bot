CREATE TABLE IF NOT EXISTS tasks (
    id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    chat_id VARCHAR(20),
    message VARCHAR(255),
    status VARCHAR(50) NOT NULL DEFAULT 'pending',
    updated_at TIMESTAMP,
    created_at TIMESTAMP
);