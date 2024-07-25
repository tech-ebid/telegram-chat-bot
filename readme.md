# Telegram Chat Bot

Proyek ini adalah bot Telegram yang menggunakan PHP 8.* dan PostgreSQL sebagai database.

## Persyaratan

- PHP 8.*
- PostgreSQL

## Cara Menggunakan

1. Clone repositori ini ke dalam direktori lokal Anda:

    ```bash
    git clone git@github.com:tech-ebid/telegram-chat-bot.git
    cd telegram-chat-bot
    ```

2. Buat database PostgreSQL yang akan digunakan oleh bot ini. Pastikan Anda memiliki akses ke server PostgreSQL dan buat database baru. Misalnya:

    ```sql
    CREATE DATABASE chatbot;
    ```

3. Atur konfigurasi database di file `.env`. Salin file `.env.example` menjadi `.env` dan edit isinya untuk mencocokkan pengaturan database Anda:

    ```bash
    cp .env.example .env

4. Jalankan Composer untuk menginstal dependensi dan menjalankan bot:

    ```bash
    composer install
    composer run migrate
    composer run chatbot
    ```

## Terimakasih...
