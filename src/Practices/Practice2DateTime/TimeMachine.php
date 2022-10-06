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
        if (!isset($options['departureDate'], $options['targetDate'], $options['ageYears'])) {
            throw new ValidationException();
        }

        $this->departureDate = $options['departureDate'];
        $this->targetDate    = $options['targetDate'];
        $this->ageYears      = (int) $options['ageYears'];
    }

    public function getTravelDistance(): string
    {
        $departureDate = \DateTime::createFromFormat('Y-m-d H:i', $this->departureDate);
        $targetDate    = \DateTime::createFromFormat('Y-m-d H:i', $this->targetDate);
        $str           = $departureDate < $targetDate ? 'в будущее.' : 'в прошлое.';
        $difference    = $targetDate->diff($departureDate);

        return $difference->format('Путешествие на %y лет, %d дня, %h час и %i минут ' . $str);
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
        $departureDate = \DateTime::createFromFormat('Y-m-d H:i', $this->departureDate);
        $targetDate    = \DateTime::createFromFormat('Y-m-d H:i', $this->targetDate);
        $diff          = $targetDate->diff($departureDate);

        if ($targetDate < $departureDate && $diff->y > $this->ageYears) {
            throw new WrongAgeException();
        }

        $options = [
            'departureDate' => $this->targetDate,
            'targetDate'    => $this->departureDate,
            'ageYears'      => 26
        ];

        return new self($options);
    }
}
