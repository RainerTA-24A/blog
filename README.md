# Blog

A Laravel blog project.

## Requirements

This guide is written for Windows and PowerShell. Install these tools before setting up the project:

- Visual Studio Code
- Git
- PHP 8.3 or newer (the project supports PHP versions below 9.0)
- Composer
- Bun
- Docker Desktop

Install Visual Studio Code, Git, PHP, Bun, and Docker Desktop with WinGet:

```powershell
winget install --id Microsoft.VisualStudioCode --exact
winget install --id Git.Git --exact
winget install --id PHP.PHP.8.5 --exact
winget install --id Oven-sh.Bun --exact
winget install --id Docker.DockerDesktop --exact
```

Composer is not available from the configured WinGet source. Download and run the [official Composer Windows installer](https://getcomposer.org/Composer-Setup.exe). If the installer asks for the PHP executable, select `php.exe`. Open a new terminal after installation so the updated `PATH` is loaded.

Check that the command-line tools are available:

```powershell
git --version
php --version
composer --version
bun --version
docker --version
```

Start Docker Desktop before continuing.

## Clone the project

The repository is:

```text
https://github.com/RainerTA-24A/blog
```

Clone it and move into the project directory:

```powershell
git clone https://github.com/RainerTA-24A/blog.git
Set-Location blog
```

Run the remaining commands from the project directory.

## Configure PHP extensions

Find the `php.ini` file used by the PHP command-line installation:

```powershell
php --ini
```

Open the **Loaded Configuration File** shown in the output. Make sure these extensions are enabled:

- `curl`
- `dom`
- `fileinfo`
- `mbstring`
- `openssl`
- `pdo_mysql`
- `tokenizer`
- `xml`

If an extension line starts with a semicolon, remove the semicolon to enable it. For example, change `;extension=curl` to `extension=curl`. Do not add a duplicate line if the extension is already enabled. Save `php.ini` and check the loaded extensions:

```powershell
php -m
```

## Install dependencies

Create your local environment file from the example:

```powershell
Copy-Item .env.example .env
```

Open `.env` and set the database values to match the MariaDB container in this project:

```dotenv
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=33062
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=example
```

Install the PHP and JavaScript dependencies:

```powershell
composer install
bun install
```

## Create and migrate the database

Make sure Docker Desktop is running, then start the MariaDB database:

```powershell
docker compose up -d
```

Generate the application key and create the database tables:

```powershell
php artisan key:generate
php artisan migrate
```

Docker Compose creates the `blog` database. Laravel migrations create the tables inside it.

## Run the application

Start the Laravel development processes:

```powershell
composer run dev
```

Open [http://localhost:8000](http://localhost:8000) in your browser. Keep the terminal open while using the application. Press `Ctrl+C` in that terminal to stop the development processes.
