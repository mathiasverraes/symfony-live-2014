<?php

namespace Model\LessonSchedule1\Tests;

use Model\LessonSchedule1\Time;
use Model\LessonSchedule1\TimeSlot;
use Model\LessonSchedule1\Weekday;
use Model\LessonSchedule1\WeeklyTimeSlot;

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
 