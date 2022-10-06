<?php

namespace App\Practices\Practice2DateTime;

use App\Practices\Practice2DateTime\Exceptions\ValidationException;
use App\Practices\Practice2DateTime\Exceptions\WrongAgeException;

class TimeMachine implements TimeMachineInterface
{
    private string $departureDate;
    private string $targetDate;
    private int    $ageYears;

    public function __construct(array $options)
    {
    }

    public function getTravelDistance(): string
    {
        return '';
    }

    /**
     * Запуск машины времени.
     * Метод возвращает новую машину времени, которая настроена на то, чтобы отправить пользователя обратно
     *
     * @throws \App\Practices\Practice2DateTime\Exceptions\WrongAgeException
     * @throws \App\Practices\Practice2DateTime\Exceptions\ValidationException
     * @return TimeMachineInterface
     */
    public function run(): TimeMachineInterface
    {
        // new self - сокращенное обращение к текущему классу, аналогичное вызову new TimeMachine();
        return new self([]);
    }
}
