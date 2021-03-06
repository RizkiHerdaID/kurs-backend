# Instalasi

Aplikasi ini menggunakan Framework Lumen (PHP).

## Kebutuhan Sistem

- Composer
- MySQL >= 5.4
- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

## Langkah-langkah instalasi

### Instalasi Lumen menggunakan composer

Pastikan composer telah terinstall

Jalankan perintah composer berikut pada root folder:

```bash
composer install
```

Catatan: Proses instalasi menggunakan composer pada Windows umumnya akan berlangsung cukup lama.

### Membuat file .env

Buatlah file .env pada root folder dengan isian sebagai berikut:

```env
APP_NAME=Kurs
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kurs
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
QUEUE_CONNECTION=sync

```

### Menjalankan migrasi dan import database

Buatlah basis data kosong menggunakan nama "kurs" sesuai variable yang diisi pada file .env tadi.

Jalankan perintah berikut untuk melakukan migrasi database

```bash
php artisan migrate
```

Lalu import data sql yang sudah disedikan pada folder berikut:

```
database\db.sql
```

### Menjalankan aplikasi

Jika selesai, selanjutnya jalankan aplikasi menggunakan perintah berikut:

```bash
php -S localhost:8000 -t public
```

### Aplikasi berhasil running

Proses selesai dan jangan tutup aplikasi ini, selanjutnya jalankan aplikasi web pada repository yang terpisah. [Klik Disini](https://github.com/RizkiHerdaID/kurs-web)

## Postman Collection

Berikut link Postman Collection yang dapat digunakan untuk keperluan testing: [Klik disini](https://www.getpostman.com/collections/630b6771961cc7f53433)

Dan berikut Local.postman_environment.json untuk Postman Collection  diatas
```json
{
	"id": "844205e2-835b-4d27-b3b5-e52967e9e7e9",
	"name": "Local",
	"values": [
		{
			"key": "url",
			"value": "http://localhost:8000",
			"enabled": true
		}
	],
	"_postman_variable_scope": "environment",
	"_postman_exported_at": "2020-10-22T22:11:57.602Z",
	"_postman_exported_using": "Postman/7.34.0"
}
```