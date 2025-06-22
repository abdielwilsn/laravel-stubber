# Laravel Stub Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wilsn/laravel-stubber.svg?style=flat-square)](https://packagist.org/packages/wilsn/laravel-stubber)
[![GitHub Tests](https://img.shields.io/github/actions/workflow/status/abdielwilsn/laravel-stubber/run-tests.yml?branch=main&label=tests)](https://github.com/abdielwilsn/laravel-stubber/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/wilsn/laravel-stubber.svg?style=flat-square)](https://packagist.org/packages/wilsn/laravel-stubber)
[![License: MIT](https://img.shields.io/github/license/abdielwilsn/laravel-stubber.svg?style=flat-square)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-10%20%7C%2011-red?style=flat-square&logo=laravel)](https://laravel.com)



**Laravel Stub Generator** provides convenient custom Artisan commands that extend the default Laravel `make:` suite. It's designed to speed up development by generating commonly used files like services, actions, and Vue components from customizable stub templates.

---

## ✅ Supported Commands

* `php artisan make:service {Name}`
  → Creates a new Service class in the `App\Services` namespace.

* `php artisan make:action {Name}`
  → Creates a new Action class in `App\Actions`.

* `php artisan make:vue {Name}`
  → Creates a new Vue component in `resources/js/Components`.

---

## 🚀 Installation

Add the package via Composer (if hosted on GitHub as `abdiel/laravel-stubber`):

```bash
composer require abdiel/laravel-stubber
```

If you are developing locally, link it as a path repo:

```json
"repositories": [
  {
    "type": "path",
    "url": "../laravel-stubber" // adjust path accordingly
  }
]
```

Then:

```bash
composer require abdiel/laravel-stubber:dev-main
```

---


## 🛠 Usage

```bash
php artisan make:service User
```

Generates:

```
app/Services/UserService.php
```


---

## 🙌 Contributing

You're welcome to contribute by:

* Opening issues (bug reports or ideas)
* Suggesting or submitting new `make:` commands
* Improving stub templates

---

## 📄 License

MIT © [Abdiel Wilson](mailto:abdieljohnwilson@gmail.com)

---
