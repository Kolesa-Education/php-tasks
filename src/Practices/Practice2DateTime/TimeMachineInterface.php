<?php

namespace App\Practices\Practice2DateTime;

interface TimeMachineInterface
{
    /**
     * Констурктор принимает текущее время, желаемое время отправки и ваш возраст
     *
     * $options = [
     *    'departureDate' => '2022-10-06 10:26',
     *    'targetDate'    => '2027-10-28 12:38',
     *    'ageYears'      => '26',
     * ];
     *
     * @param  array $options
     * @throws \App\Practices\Practice2DateTime\Exceptions\ValidationException
     */
    public function __construct(array $options);

    /**
     * Метод возвращает дистанцию путешествия в виде строки:
     * "Путешествие на 5 лет, 22 дня, 2 час и 12 минут в будущее."
     * "Путешествие на 1 лет, 3 дня, 1 час и 12 минут в прошлое."
     *
     * @return string
     */
    public function getTravelDistance(): string;

    /**
     * Запуск машины времени.
     * Метод возвращает новую машину времени, которая настроена на то, чтобы отправить пользователя обратно
     *
     * @throws \App\Practices\Practice2DateTime\Exceptions\WrongAgeException
     * @return TimeMachineInterface
     */
    public function run(): TimeMachineInterface;
}
