# UTS_Web1


## NgeEvent.com - Platform Informasi Event
```
Name    : Aldi Alfariz 
NIM     : 24552011212
Kelas   : TIF RP-23 CNS A
```

## Project Deskripsi
 NgeEvent.com adalah platform informasi dari berbagai event dan informasi terbaru. website ini dibangun sebagai tugas UTS web pemograman 1 fokus pada pengembangan menggunakan PHP narative dan MySQL.  

## Fitur 
- **User Registrasi** - Pendaftaran dengan validasi
- **User Login** - System Login
- **Dashboard User** - Halaman Personal untuk User
- **Logout** - system Logout
- **Add Event** - pengguna dpt menambahkan event/informasi baru (jika sempat)

## Pages
- **HoomePage** - Halaman utama user
- **Find Event** - Kumpulan Informasi dan event yang ada
- **Detail Event** - halaman detail tentang event dan informasi
- **About Page** - informasi tentang platform
- **Contact Page** - Halaman Kontak dengan map dan informasi

## API EndPoint
API endpoint untuk CRUD:
- ``POST /api/event/create.php`` - Membuat data event
- ``POST /api/event/delete.php`` - Menghapus data event
- ``GET /api/event/read.php`` - Mengambil data event
- ``POST /api/event/update.php`` - Memperbaharui data event

## Teknology yang di gunakan
**FrontEnd**
- **HTML5**  
- **Bootstrap**  
- **JavaScript**   

**BackEnd**
- **PHP**  
- **MySQL**  
- **PDO** 

**Develoyment Tolls**
- **Xampp**  
- **Postman**  
- **GitHub web**  
- **VsCode**  


## folder structure 

```javascript
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
```
## DataBase Schema

**Table User**
``
CREATE TABLE `users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `join_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
)
``

**Table Informasi**
`` 
CREATE TABLE `infromasi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Judul` VARCHAR(255) NOT NULL,
  `konten` VARCHAR(5000) NOT NULL,
  `content_type` VARCHAR(55) NOT NULL,
  `tujuan` VARCHAR(255) NOT NULL,
  `tanggal_publikasi` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)

``

## Key Features & Benefits

- **User Management:** Create and manage user accounts.
- **Event Management:** Create, read, update, and delete events.
- **Client-Side Validation:** Implements client-side login validation using JavaScript.
- **Database Connectivity:** Utilizes PHP scripts to interact with a database (likely MySQL).
- **Modular Structure:** Organized directory structure separating API, user management, and includes.


## Installation & Setup Instructions

Before setting up the project, ensure you have the following:

- **Web Server:** Apache or Nginx.
- **PHP:** Version 7.0 or higher.
- **MySQL:** Or any other compatible database server.
- **Text Editor/IDE:** VSCode, Sublime Text, or similar.
- **Web Browser:** Chrome, Firefox, or Safari for testing.

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
     $db     = "Event.info";

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

These endpoints typically receive and return data in JSON format.  Refer to the source code of each PHP file for specific parameters and expected responses.

## API Documentation
**GET /event/read.php**
Mengambil Data

**POST /event/create.php**
**Body:**
``
{
    "Judul": "IDCamp Virtual Roadshow x WTM - Beyond Bias: Perempuan, Data, dan Kesetaraan di Era AI",
    "konten": "Pemberitahuan penting tentang pembaruan keamanan server dan perubahan kata sandi wajib.",
    "content_type": "Seminar", 
    "tujuan": "Update Keamanan Sistem."
}
``

**POST /event/delete.php**
Delete Data By Id

**POST /event/update.php**
Update data


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


## Author
Aldi Alfariz 24552011212 TIF RP-24 CNS A