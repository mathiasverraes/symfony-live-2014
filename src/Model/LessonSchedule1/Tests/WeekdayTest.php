<?php

namespace Model\LessonSchedule1\Tests;

use InvalidArgumentException;
use Model\LessonSchedule1\Weekday;
use PHPUnit_Framework_TestCase;

final class WeekdayTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $this->assertEquals('Friday', (string) Weekday::Friday());
    }

    /**
     * @test
     */
    public function throws_for_malformed_weekdays()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        new Weekday('wrong');
    }
}
 