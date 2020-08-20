# Добавление лидов Bitrix24

Основные настройки:
```php
<?php
$crmUrl = 'Ваш домен Bitrix24';
$login = 'Логин';
$password = 'Пароль';
$site_url = $_SERVER['SERVER_NAME'];
$mail = 'Емейл';
?>
```

Доп поля:
```php
<?php
$arParams['UF_CRM_1565163116']='доп поле';
$arParams['UF_CRM_1583254921738']='доп поле';
?>
```
