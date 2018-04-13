# Installation
Cara instalasi sebagai berikut

## Clone Project
Clone project ini dengan perintah
```
git clone https://gitlab.com/uripyogantara/pretest-prognet.git
```

## Install Composer
Lakukan proses install composer dengan perintah berikut
```
composer install
```

## Buat file .env
Buatlah file .env melalui text editor kalian (Sublime, Visual Studio Code), kemudian copy isi dari file .env.example ke file .env yang telah dibuat tadi.
kemudian setting username, password, dan database kalian pada file .env

## Generate APP_KEY
Lakukan generati application key dengan perintah berikut
```
php artisan key:generate
```

## Migrate database
Migrasi database dengan perintah
```
php artisan migrate
```

## Insert Data ke Database
Lakukan proses insert data ke database dengan perintah berikut
```
php artisan db:seed
```

## Jalankan Aplikasi
Jalankan aplikasi dengan perintah berikut
```
php artisan serve
```

# Push ke Git Repository
Setelah selasai push hasil pretest ke git repository masing-masing dengan cara

## Remote URL
Ubah URL git yang awalnya di URL saya ke URL kalian dengan sintak berikut.
```
git remote set-url https://github.com/username/repository.git
```

## Add
```
git add .
```

## Commit
Commit project dimana message disesuaikan dengan proses yang anda dapat, misalkan anda mendapat proses insert ke user, maka message-nya "insert user"
```
git commit -m "message"
```

## Push
```
git push
```