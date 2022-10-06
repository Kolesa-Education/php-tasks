# Практика 2. Машина времени

В задаче нам предстоит поработать с датами, форматированием текста и выбросом исключений.
Задание проеряется [автотестом](/tests/Unit/Practices/Practice2DateTime/TimeMachineTest.php), можно смотреть там примеры использования.

Перед заданием рекомендуется прочитать статьи:
- [Работа с датами.](https://github.com/Kolesa-Education/backend-articles/blob/master/php/dates.md)
- [Обработка ошибок в PHP.](https://github.com/Kolesa-Education/backend-articles/blob/master/php/exceptions.md)

## Задание
Вы нашли машину времени в подвале у вашего дедушки.

Машина времени, представляет собой класс `TimeMachine`.
К сожалению, от машины времени остался только интерфейс `TimeMachineInterface` и агрегат, проводящий предполётную проверку.
Вам нужно имплементировать все методы интерфейса в классе `TimeMachine`.

Порядок запуска машины:
```php
$options = [
    'departureDate' => '2022-10-06 10:26',
    'targetDate'    => '2027-10-28 12:38',
    'ageYears'      => '26',
];

try {
    $timeMachine   = new TimeMachine($options);
    $flightTime    = $timeMachine->getTravelDistance();

    echo $flightTime; // "Путешествие на 5 лет, 22 дня, 2 час и 12 минут в будущее."

    $returnMachine = $timeMachine->run();
} catch (WrongAgeException $e) {
    echo $e->getMessage();
    exit;
} catch (WrongAgeException $e) {
    echo $e->getMessage();
    exit;
}

echo 'Вы совершили путешествие!';

$returnMachine->run();

echo 'Вы вернулись';
```

**У машины есть особенности, нужно их учесть:**
- Добавить валидацию - Если не передана дата отправки, желаемая дата прибытия и ваш возраст, то конструктор должен выбрасывать исключение `ValidationException`.
- Нельзя путешествовать в прошлое до своего рождения. Метод run, должен выбрасывать исключение `WrongAgeException`, если разница между `targetDate` и `currentDate` больше лет, чем указано в ageYears. 
- Метод `getTravelDistance` возвращает дистанцию полёта во времени в виде форматированной строки.
  `Путешествие на 5 лет, 22 дня, 2 час и 12 минут в будущее.`, склонять слова `дня, лет и т.д.` - не нужно.
- Метод `run()` в случае успеха возвращает новую машину времени, настроенную на возврат в то время, откуда вы отправились.

**Автотесты:**  
Чтобы запустить проверку работоспособности, можете указать в TEST_PATH строку
```
tests/Unit/Practices/Practice2DateTime
```
И если всё хорошо, то рядом с названием ветки будет зелёная галочка.