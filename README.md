# CMYK-main-backend

## Папки
* **migrations** - внутри класс содержащий в себе методы вызовов миграций, лежащих рядом 
* **controllers** - классы обработчики для бизнес-логики
* **models** - классы основных (и не только) бизнес-сущностей (например создание/удаление/редактирование users)
* **core** - все основные классы приложения здесь (router,db, итд) - позже инициируются по требованию в index.php либо контроллерах

## Файлы
* **index.php** - файл инициализации приложения (тут монтируются все зависимости и первичные инстанцы роутера и других важных сервисов)
* **debug.php** - файл отладки, если включен dev режим (не реализовано)
