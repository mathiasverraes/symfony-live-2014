<?php

namespace Model\P1_ValueObjects\Tests;

use Model\P1_ValueObjects\Time;
use Model\P1_ValueObjects\TimeSlot;
use Model\P1_ValueObjects\Weekday;
use Model\P1_ValueObjects\WeeklyTimeSlot;

final class WeeklyTimeSlotTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $this->assertEquals(
            "Monday 10:00-11:00",
            (string)
            new WeeklyTimeSlot(
                Weekday::Monday(),
                new TimeSlot(new Time("10:00"), new Time("11:00"))
            )
        );
    }
}
 