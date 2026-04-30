# Vilnius Vet — PHP website

Рабочий репозиторий для нового мультиязычного сайта ветеринарной клиники `vilnius.vet`.

Сайт делается с нуля на PHP, без WordPress.

## Языки

- LT — основной язык
- EN — дополнительный язык
- RU — дополнительный язык

## Основные страницы

- Главная
- О нас
- Услуги и цены
- Контакты
- Блог
- Privatumo politika
- Slapukų politika

## Рабочая структура

```text
index.php
send.php
config.php
partials/
  header.php
  nav.php
  footer.php
  cookie-banner.php
  lang-switcher.php
lang/
  lt.php
  en.php
  ru.php
data/
  services.php
  blog-posts.php
assets/
  css/style.css
  js/app.js
  img/
```

## Принцип

Контент, языки, услуги, цены и статьи держим отдельно от шаблонов. Так сайт можно развивать без переделки всей вёрстки.
