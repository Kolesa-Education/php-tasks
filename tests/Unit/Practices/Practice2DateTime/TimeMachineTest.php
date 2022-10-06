<?php

namespace Tests\Unit\Practices\Practice2DateTime;

use App\Practices\Practice1\Calculator;
use App\Practices\Practice2DateTime\Exceptions\ValidationException;
use App\Practices\Practice2DateTime\Exceptions\WrongAgeException;
use App\Practices\Practice2DateTime\TimeMachine;
use PHPUnit\Framework\TestCase;

class TimeMachineTest extends TestCase
{
    /**
     * @dataProvider timeMachineProvider
     */
    public function testTimeMachine($options, $expectedFlightTime, $expectedBackTime): void
    {
        $timeMachine = new TimeMachine($options);

        $this->assertEquals($expectedFlightTime, $timeMachine->getTravelDistance());

        $returnMachine = $timeMachine->run();

        $this->assertEquals($expectedBackTime, $returnMachine->getTravelDistance());
    }

    /**
     * @dataProvider timeMachineProvider
     */
    public function testParameterException(): void
    {
        $this->expectException(ValidationException::class);
        $timeMachine = new TimeMachine([]);
        $timeMachine->run();
    }

    public function testAgeException(): void
    {
        $this->expectException(WrongAgeException::class);
        $timeMachine   = new TimeMachine([
            'departureDate' => '2022-10-06 10:26',
            'targetDate'    => '1202-10-28 12:38',
            'ageYears'      => 26,
        ]);

        $timeMachine->run();
    }

    private function timeMachineProvider(): array
    {
        return [
            [
                'options' => [
                    'departureDate' => '2022-10-06 10:26',
                    'targetDate'    => '2027-10-28 12:38',
                    'ageYears'      => 26,
                ],
                'expectedFlightTime' => 'Путешествие на 5 лет, 22 дня, 2 час и 12 минут в будущее.',
                'expectedBackTime'   => 'Путешествие на 5 лет, 22 дня, 2 час и 12 минут в прошлое.',
            ],
            [
                'options' => [
                    'departureDate' => '2027-10-28 11:38',
                    'targetDate'    => '2022-10-06 10:26',
                    'ageYears'      => 26,
                ],
                'expectedFlightTime' => 'Путешествие на 5 лет, 22 дня, 1 час и 12 минут в прошлое.',
                'expectedBackTime'   => 'Путешествие на 5 лет, 22 дня, 1 час и 12 минут в будущее.',
            ]
        ];
    }
}
