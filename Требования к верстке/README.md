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
  box-sizing: border-box;
}
```
В основном этого хватает что бы сбросить стили браузеров

### JS

Используем только:
<https://owlcarousel2.github.io/OwlCarousel2/> для слайдеров
<https://fancyapps.com/fancybox/3/> для увеличения картинок или видео во всплывающем окне (для попапв с формами или текстом не используем)
<https://jqueryui.com/> слайдеры в калькуляторах, выпадающие ссылки и т.д.

Другие библиотеки можно использовать только по согласованию.

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

## Адаптив

### Контент

Верстку делаем только резиновой без прыжков контентной области.

Не правильно:
```css
.content {
  width: 1140px;
  margin: 0 auto;
}
@media screen and (max-width: 1200px) {
  .content {
    width: 900px;
  }
}
```

Правильно:
```css
.content {
  width: 100%;
  margin: 0 auto;
  max-width: 1170px;
  padding: 0 15px;
}
```
media запрос уже не нужен и контент на ширине экрана меньше 1170px будет уменьшаться без прыжков и занимать 100% - 30px экрана

### Флекс блоки

Перестроение и построение блоков в ряд

Пример: есть 4 блока в ряд с отступами 30 пикселей между ними class="item" и внешний блок class="items", при ширине экрана 500 перестраиваем блоки по 2 в ряд

```css
.items {
  width: 100%;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.items .item {
  width: calc(100% - 30px * 4 / 3);
}
@media screen and (max-width: 500px) {
  .items .item {
    width: calc(50% - 30px / 2 )
  }
}
```

width: calc(100% - 30px * 4 / 3); - умножаем отступ на количество блоков и делим на количество отступов

# Категорически запрещается

Использовать готовые бибилиотеки для простых вещей типа popup или простые анимации.

Использовать onСlick в HTML коде - вся работа только с файла main.js

Прописывать стили внутри HTML кода

Использовать
'''html
<input type='button' />
'''
Вместо его используем
'''html
<button type='submit'></button>
'''

Button используем только внутри форм, в других случаях даже если ссылка выглядит как кнопка все равно используем
'''html
<a href="#"></a>
'''
