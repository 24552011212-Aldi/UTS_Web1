# UTS_Web1

# UTS_Web1

## Project Overview

This repository contains the code for UTS_Web1, a web application built using JavaScript and PHP. This project provides functionalities across user and event management, incorporating front-end and back-end components.

## Key Features & Benefits

- **User Management:** Create and manage user accounts.
- **Event Management:** Create, read, update, and delete events.
- **Client-Side Validation:** Implements client-side login validation using JavaScript.
- **Database Connectivity:** Utilizes PHP scripts to interact with a database (likely MySQL).
- **Modular Structure:** Organized directory structure separating API, user management, and includes.

## Prerequisites & Dependencies

Before setting up the project, ensure you have the following:

- **Web Server:** Apache or Nginx.
- **PHP:** Version 7.0 or higher.
- **MySQL:** Or any other compatible database server.
- **Text Editor/IDE:** VSCode, Sublime Text, or similar.
- **Web Browser:** Chrome, Firefox, or Safari for testing.

## folder structure 
└── UTS_WEB1_TIF-RP-23-CNS_Event/
    ├── login.php
    ├── profile.php
    ├── register.php
    ├── index.php
    ├── contact.php
    ├── detail.php
    ├── about.php
    ├── logout.php
    ├── dashboard.php
    ├── README.md
    ├── api/
    │   ├── koneksi.php
    │   ├── user/
    │   │   └── create_user.php
    │   └── event/
    │       ├── update.php
    │       ├── create.php
    │       ├── read.php
    │       └── delete.php
    ├── includes/
    │   ├── header.php
    │   ├── footer.php
    │   └── header_db.php
    ├── js/
    │   └── script.js



## Installation & Setup Instructions

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/24552011212-Aldi/UTS_Web1.git
   cd UTS_Web1
   ```

2. **Set up the Database:**

   - Create a new database in MySQL:
     ```sql
     CREATE DATABASE your_database_name;
     USE your_database_name;
     ```
   - Import your database schema (if any).

3. **Configure Database Connection:**

   - Edit `api/koneksi.php` to update the database connection details:

     ```php
     <?php
     $host   = "localhost";
     $user   = "your_username";
     $pass   = "your_password";
     $db     = "your_database_name";

     $koneksi = mysqli_connect($host, $user, $pass, $db);

     if (mysqli_connect_errno()) {
       echo "Koneksi database gagal : " . mysqli_connect_error();
     }
     ?>
     ```

4. **Configure Web Server:**

   - Configure your web server to point to the project directory.
   - Ensure PHP is enabled and properly configured.

5. **Access the Application:**

   - Open your web browser and navigate to the project URL (e.g., `http://localhost/UTS_Web1/index.php`).

## Usage Examples & API Documentation

### Client-Side Login (JavaScript)

The `js/script.js` file contains a simple login function:

```javascript
const VALID_USERNAME = "user";
const VALID_PASSWORD = "123";

function handleLogin() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Struktur Percabangan If
    if (username === VALID_USERNAME && password === VALID_PASSWORD) {
        alert("Login Berhasil! (client-side)");
        window.location.href = 'dashboard.php';
    } else {
        alert("Login Gagal! Username atau Password salah.");
    }
}
```

### API Endpoints (PHP)

- **Create Event:** `api/event/create.php`
- **Read Event:** `api/event/read.php`
- **Update Event:** `api/event/update.php`
- **Delete Event:** `api/event/delete.php`
- **Create User:** `api/user/create_user.php`

These endpoints typically receive and return data in JSON format.  Refer to the source code of each PHP file for specific parameters and expected responses.

## Configuration Options

The project's configuration is primarily managed through:

- **Database Connection:** `api/koneksi.php` contains database credentials.
- **Client-Side Credentials:** `js/script.js` contains hardcoded username and password for demonstration purposes, **DO NOT** use this approach in production.
- **File Paths:** The `includes/` directory manages header and footer includes, facilitating site-wide updates.

## Contributing Guidelines

We welcome contributions to improve this project! To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and test thoroughly.
4. Submit a pull request with a clear description of your changes.

## License Information

This project does not currently have a specified license. All rights are reserved by the owner. If you would like to use or distribute this project, please contact the owner for permission.

## Acknowledgments

- This project utilizes PHP and JavaScript, and we thank the developers and communities for providing these powerful tools.
- Thanks to any third-party libraries or resources used in the project. Specific credits can be added here as needed.


## Authors

Name    : Aldi Alfariz 
NIM     : 24552011212
Kelas   : TIF RP-23 CNS A
