# Задачки для отработки написания кода на PHP

**Tasks** - небольшие задания для набивки руки
Директория с названием Task1 - представляет собой цельное задание, инструкция к которому описана в Readme директории

[1. Обход коллекции чисел с помощью foreach](/src/Tasks/Task1)

**Practices** - более сложные и комплексные задания. Логика выполнения такая-же как в Tasks.

[1. Доработать класс калькулятора](/src/Practices/Practice1)

[2. Реализовать машину времени на основе интерфейса](/src/Practices/Practice2DateTime)

## Автоматическая проверка
Тесты на задания автоматически запускаются в GitHub Actions.
На созданные ветки с решенным заданиями запустятся автотесты и их результат будет отображаться во вкладке Actions.

То, какие тесты будут запущены в GitHub, нужно указывать в файле TESTS_PATH.
Например если вы выполняете задание ```Practices/Practice1```, то в файле TESTS_PATH, вам нужно прописать
```
tests/Unit/Practices/Practice1
```
и запушить в репозиторий вместе с выполненным заданием. И тогда вы полчите заветную зелёную галочку :)

## Установка и запуск тестов локально
Нужно иметь установленные в системе: 
- PHP > 8.1 
- Composer 2

PHP можно установить командой ```make php-install```

Установить зависимости:
```
composer install
```
Запуск всех тестов
```
vendor/bin/phpunit tests
```

Запуск теста конкретного задания
```
vendor/bin/phpunit tests/Unit/Tasks/Task1
```