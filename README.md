# Laravel Stub Generator

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
