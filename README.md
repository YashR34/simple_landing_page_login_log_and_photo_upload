# Simple Landing Page with Login, Logout, and Dashboard

This project is a simple landing page that includes user authentication with login and logout functionality, a dashboard with OTP verification, and a photo upload option. The database used is `dynamicwp`.

## Features

- Landing Page
- User Login and Logout
- OTP Verification
- Dashboard
- Photo Upload

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- PHPMailer

## Getting Started

### Prerequisites

- XAMPP or any other PHP and MySQL development environment
- Git

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/YashR34/simple_landing_page_login_log_and_photo_upload.git
    cd simple_landing_page
    ```

2. Move the project files to your XAMPP htdocs directory:
    ```sh
    mv simple_landing_page /path/to/xampp/htdocs/landing_page
    ```

3. Create a database in MySQL:
    - Open phpMyAdmin (http://localhost/phpmyadmin)
    - Create a new database named `dynamicwp`

4. Import the `dynamicwp.sql` file into the `dynamicwp` database:
    - In phpMyAdmin, select the `dynamicwp` database
    - Go to the Import tab
    - Choose the `dynamicwp.sql` file from the project directory
    - Click Go

5. Update the database configuration in `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dynamicwp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

6. Update the PHPMailer configuration in `login/controller.php`:
    ```php
    // Add your SMTP email and password
    $mail->Host = 'smtp.example.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;           // Enable SMTP authentication
    $mail->Username = 'your_email@example.com'; // SMTP username
    $mail->Password = 'your_password';         // SMTP password
    ```

7. Make sure to create an `uploads` folder inside the `assets` directory for storing uploaded photos:
    ```sh
    mkdir -p assets/uploads
    ```

8. Start XAMPP and ensure Apache and MySQL are running.

9. Access the website by navigating to:
    ```
    http://localhost/landing_page
    ```

## Usage

- **Landing Page**: General information and access to login.
- **Login**: Enter credentials to login, followed by OTP verification.
- **Dashboard**: Access the dashboard after successful login and OTP verification. Users can upload their photos here.
- **Logout**: Log out from the dashboard.

## Contributing

1. Fork the repository.
2. Create your feature branch:
    ```sh
    git checkout -b feature/your-feature
    ```
3. Commit your changes:
    ```sh
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```sh
    git push origin feature/your-feature
    ```




For any questions or feedback, please contact [YashR34](https://github.com/YashR34).
