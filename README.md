# Сборник задач для изучения PHP

Задачи разделены по директориям:
- **Practices** - комплексные задачи разной сложности.
- **Tasks** - небольшие задания для набивки руки.

### Практики:
1. [Доработать класс калькулятора](/src/Practices/Practice1)
2. [Реализовать класс машины времени на основе интерфейса](/src/Practices/Practice2DateTime)

### Задачки:
1. [Обход коллекции чисел с помощью foreach](/src/Tasks/Task1) - рекомендуем выполнить первой, для того, чтобы освоить флоу и возможности автопроверки.

### Порядок выполенения:
1. Склонировать репозиторий
2. Создать ветку
3. Выполнить задачу
4. Запустить автотесты локально или запушив ветку в репозиторий.
5. При желании, можно отправить ветку ментору для код-ревью.

Баллы за выполенении заданий не начисляются, но вы получите хороший опыт работы с автотестами, научитесь читать их вывод.

### Автоматическая проверка
На созданные ветки запустится сборка проекта и автотесты. Их результат будет отображаться во вкладке [Actions](https://github.com/Kolesa-Education/php-tasks/actions).
Успешно выполнененная сборка будет зелёной - [пример](https://github.com/Kolesa-Education/php-tasks/actions/runs/3196897466/jobs/5219422222).   
Изучить вывод тестов можно нажав на `Build` и перейдя во вкладку `test with phpunit`

То, какие тесты будут запущены в GitHub, нужно указывать в файле TESTS_PATH.
Например если вы выполняете задание ```Practices/Practice1```, то в файле TESTS_PATH, вам нужно прописать:
```
tests/Unit/Practices/Practice1
```
и запушить в репозиторий вместе с выполненным заданием. И тогда вы полчите заветную зелёную галочку :)

В момент отправки ветки в репозиторий, GitHub выполняет сборку:
- Устанавливает PHP.
- Запускает Composer для установки библиотек.
- Запускает автотесты с помощью PHPUnit.
- Выводит информацию об успехе или ошибках.

**Сборка** - неотъемлемая часть системы непрерывной доставки кода в продакшн [(CI/CD)](https://habr.com/ru/company/otus/blog/515078/).

### Установка и запуск тестов локально
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
