# Gestion de Congés en PHP (MVC)

Cette application est une gestion de congés basique en PHP utilisant le modèle MVC. Elle inclut des fonctionnalités d'inscription et de connexion sécurisées pour les utilisateurs ainsi que la gestion des congés (CRUD).

## Prérequis

- PHP 7.x ou supérieur
- Serveur Apache (par exemple, via XAMPP)
- MySQL ou MariaDB
- Composer (pour la gestion des dépendances, si nécessaire)

## Installation

1. **Clonez le dépôt :**

    ```sh
    git clone https://github.com/votre-utilisateur/gestion-conges-mvc.git
    cd gestion-conges-mvc
    ```

2. **Configuration de la base de données :**

    - Ouvrez phpMyAdmin ou un outil de gestion de base de données de votre choix.
    - Créez la base de données et les tables nécessaires en exécutant les requêtes SQL suivantes :

    ```sql
    CREATE DATABASE IF NOT EXISTS gestion_conges;
    USE gestion_conges;

    CREATE TABLE IF NOT EXISTS users (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

    CREATE TABLE IF NOT EXISTS leaves (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        user_id INT(11) NOT NULL,
        start_date DATE NOT NULL,
        end_date DATE NOT NULL,
        reason TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );
    ```

3. **Configuration de l'application :**

    - Renommez le fichier `config/config.example.php` en `config/config.php` et mettez à jour les paramètres de connexion à la base de données.

    ```php
    // config/config.php
    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'gestion_conges');
    ```

4. **Lancer le serveur :**

    Si vous utilisez XAMPP, placez les fichiers dans le répertoire `htdocs` et démarrez le serveur Apache et MySQL via le panneau de contrôle de XAMPP.

    Accédez à l'application via votre navigateur à l'adresse : `http://localhost/gestion-conges-mvc`

## Structure du projet

```plaintext
gestion-conges-mvc/
├── config/
│   └── config.php
├── controllers/
│   ├── UserController.php
│   └── LeaveController.php
├── lib/
│   └── Database.php
├── models/
│   ├── User.php
│   └── Leave.php
├── views/
│   ├── login.php
│   ├── register.php
│   ├── apply_leave.php
│   ├── edit_leave.php
│   └── view_leaves.php
├── assets/
│   └── css/
│       └── style.css
├── index.php
└── README.md
