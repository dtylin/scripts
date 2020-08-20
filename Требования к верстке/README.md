# Основные требования к верстке

## Структура и файлы

Структура папок
* css - файлы стилей
* img - изображения
* js - скрипты
* php - обработчики форм

### CSS
* reset.css - сбрасываем стили браузеров
* main.css - основные стили
* responsive.css - стили адаптива

reset.css
```css
* {
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;}
```
В основном этого хватает что бы сбросить стили браузеров

### HTML

Пример/заготовка index.html
```html
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <title>Название сайта</title>
  <meta name="description" content="Описание">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/rest.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>

  <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>
```
В коде видем что стили подключаются в таком порядке:
1. шрифты и стили подключаемых библиотек
2. Наши стили в порядке сброс, основные стили, стили респонсива

В конце страницы перед закрывающим тегом body мы подключаем js:
1. Подключаем jQeury c code.jquery.com
2. Подключаем библиотеки с папки js или с репозиториев
3. Подключаем наш файл main.js
