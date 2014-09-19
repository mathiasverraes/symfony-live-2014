<?php

namespace Model\P1_ValueObjects\Tests;

use InvalidArgumentException;
use Model\P1_ValueObjects\Time;
use Model\P1_ValueObjects\TimeSlot;

final class TimeSlotTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $this->assertEquals('13:45-15:15', (string) new TimeSlot(new Time('13:45'), new Time('15:15')));
    }

    /**
     * @test
     */
    public function end_time_cant_be_earlier_than_start_time()
    {
        $this->markTestIncomplete("Not implemented");
        $this->setExpectedException(InvalidArgumentException::class);
        new TimeSlot(new Time('12:00'), new Time('11:00'));
    }
}
 