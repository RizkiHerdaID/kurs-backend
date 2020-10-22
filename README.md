# Instalasi

Aplikasi ini menggunakan Framework Lumen (PHP).

## Kebutuhan Sistem

- Composer
- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

## Langkah-langkah instalasi

### Instalasi lumen menggunakan composer

Pastikan composer telah terinstall

Jalankan perintah composer berikut pada root folder:

```bash
composer install
```

Nb: Proses instalasi menggunakan composer pada Windows umumnya akan berlangsung cukup lama.

### Menjalankan aplikasi

Jika selesai, selanjutnya jalankan aplikasi menggunakan perintah berikut:

```bash
php -S localhost:8000 -t public
```

### Aplikasi berhasil running

Proses selesai dan jangan menutup aplikasi ini, selanjutnya jalankan aplikasi web.

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