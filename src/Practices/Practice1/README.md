# Практика 1 Классы и объекты
## Задача 1: дописать реализацию класса Calculator.
Класс, расположенный в файле Calculator.php, должен иметь методы:
- add - сложение. Реализован
- sub - вычитание. Реализован
- multiply - умножение. Дописать метод
- divide - деление. Дописать метод и валидацию.
- pow - возведение в степень. Создать и написать новый метод.

Примеры использования:
```php
$calculator = new Calculator();
$calculator->add(1, 2); //3
$calculator->sub(3, 1); //2
$calculator->multiply(2, 2); //4
$calculator->divide(6, 2); //3
$calculator->pow(3, 2) //9
```

Пограничные кейсы:
```php
$calculator->divide(2, 0); //null
```

## Задача 2: реализовать метод run
Допишите реализацию метода run. Метод принимает два операнда и оператор,
затем выбирает какой метод этого же класса нужно вызвать с этими операндами

Метод должен иметь валидацию:
- Если невозможно делить, метод должен возвращать строку "Divide by zero"
- Если передан неизвестный оператор, метод должен возвращать строку "Unknown operator: $operator"

```php
$calculator->run(1, 2, '+') // 3
$calculator->run(2, 0, '/') // Divide by zero
$calculator->run(2, 2, 'F') // Unknown operator: F
```

Успешным выполнением задания считается прохождение всех тестов в Github Actions.
Проверить работу класса калькулятора можно запустив скрипт ```./bin/calculator```