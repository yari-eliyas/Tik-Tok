# Laravel TikTok Timer ⏱️
![Laravel](https://img.shields.io/badge/Laravel-10%2C11%2C12-red?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue?style=flat&logo=php)


یک پکیج ساده، سبک و کاربردی برای **اندازه‌گیری زمان اجرای کد** در Laravel.

با استفاده از دو تابع ساده `tik()` و `tok()` می‌توانید زمان اجرای هر بخشی از کدتان (Controller, Model, Service, Job, Middleware و ...) را به راحتی اندازه‌گیری کنید.

---

## ویژگی‌ها

- بسیار سبک و بدون dependency اضافی
- استفاده از `hrtime()` برای دقت بالا
- پشتیبانی از چندین تایمر همزمان با نام دلخواه
- نمایش خودکار زمان در محیط Local / Debug
- ثبت در Log در محیط Production
- نصب و راه‌اندازی بسیار آسان
- قابل استفاده در همه جای Laravel

---

## English

**TikTok Timer** is a simple, lightweight package that helps you measure the execution time of your code in Laravel applications.

Just use `tik()` to start and `tok()` to stop and see how long a piece of code takes.

### Features
- ⚡ Very lightweight (no dependencies)
- 🎯 High precision using `hrtime()`
- 🔖 Support for multiple named timers
- 🖥️ Beautiful output in local/debug mode
- 📝 Auto logging in production
- 🌐 Works everywhere (Controllers, Models, Services, Jobs, Middleware, etc.)

### Requirements
- **PHP**: `^8.2`
- **Laravel**: `^10.0 | ^11.0 | ^12.0`
### Sample

tik();
your code
tok();


### Installation

```bash
composer require e-yari/tik-tok