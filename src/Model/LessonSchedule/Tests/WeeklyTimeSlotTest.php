<?php

namespace Model\LessonSchedule\Tests;

use Model\LessonSchedule\Time;
use Model\LessonSchedule\TimeSlot;
use Model\LessonSchedule\Weekday;
use Model\LessonSchedule\WeeklyTimeSlot;

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
 