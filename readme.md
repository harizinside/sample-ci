## Sample CI
Projeck ini bertujuan untuk membuat sample codeigniter untuk startup app

## Installasi
- Pertama anda bisa clone project ini atau download langsung
- Selanjutnya anda akan diminta untuk installasi composer

#### Windows
untuk pengguna windows bisa di cek disini  [Composer](https://getcomposer.org/Composer-Setup.exe)

#### Mac
```sh
brew install composer
```

#### Ubuntu
```sh
sudo apt-get install curl php-cli php-mbstring git unzip
curl –sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

Setelah selesai installasi dan download, selanjutnya arahkan terminal atau cmd pada project anda dan ketikan perintah berikut:

```sh
composer install
```

Kemudian buka project anda dengan Visual Studio Code atau Sublime, pada file .env.example copy seluruh file lalu buat file lagi dengan name .env lalu paste seluruh file .env.example dana setup project anda sesuai dengan kebutuhan.

lalu buat file lagi bernama .htaccess masukan kode berikut 

```htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

