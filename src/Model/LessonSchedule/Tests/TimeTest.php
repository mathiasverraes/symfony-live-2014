<?php

namespace Model\LessonSchedule\Tests;

use InvalidArgumentException;
use Model\LessonSchedule\Time;

final class TimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $this->assertEquals('13:45', (string) new Time('13:45'));
    }

    /**
     * @test
     */
    public function throws_for_malformed_times()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        new Time('25:61');
    }
}
 