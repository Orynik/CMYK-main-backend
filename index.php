<?php
## Здесь инициировать инстансы БД и роутера

## Подключение библиотек из composer
require_once 'vendor/autoload.php';

#TODO: Сделать включение debug.php если включен dev режим

## Подключение миграций, подключить как только напишется общий класс для миграций + сами миграции
# use Migrations\Migrate;
