# School Management System

A comprehensive Laravel-based application designed to manage all aspects of a school's operations.

## About The Project

This project is a School Management System (SMS) built with the Laravel framework. It provides a platform for managing students, staff, classes, exams, payments, and other school-related activities. The application is designed to be a central hub for school administration.

## Tech Stack

*   **Backend:** PHP 8.2, Laravel 11
*   **Frontend:** Bootstrap 4, SASS, jQuery
*   **Build Tool:** Vite
*   **Database:** MySQL (or other Laravel-supported database)
*   **PDF Generation:** `barryvdh/laravel-dompdf`

## Installation

Follow these steps to get a local copy up and running.

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/your_username/your_repository.git
    cd sms
    ```

2.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

3.  **Install frontend dependencies:**
    ```sh
    npm install
    ```

4.  **Create your environment file:**
    ```sh
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```sh
    php artisan key:generate
    ```

6.  **Configure your database:**
    Open the `.env` file and set your database connection details (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

7.  **Run database migrations:**
    ```sh
    php artisan migrate
    ```

8.  **(Optional) Seed the database with initial data:**
    ```sh
    php artisan db:seed
    ```

9.  **Build frontend assets:**
    ```sh
    npm run dev
    ```
    Or for production:
    ```sh
    npm run build
    ```

10. **Serve the application:**
    ```sh
    php artisan serve
    ```
    The application will be available at `http://127.0.0.1:8000`.

## Key Features

Based on the project structure, the application includes the following modules:

*   **User Management:** Handles different user roles (e.g., admin, student, teacher).
*   **Student & Staff Records:** Manages detailed records for students and staff members.
*   **Class & Section Management:** Organizes classes and sections.
*   **Academic Management:**
    *   Subject Management
    *   Exam & Mark Management
    *   Grading System
    *   Student Promotion
*   **Timetables:** Create and manage class schedules.
*   **Financials:**
    *   Payment & Fee Management
    *   Receipt Generation
*   **Dormitory Management:** Manages student housing.
*   **Library System:** Manages books and book requests.
*   **Settings:** Configurable application settings.
