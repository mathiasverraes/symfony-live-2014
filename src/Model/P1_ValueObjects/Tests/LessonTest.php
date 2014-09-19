<?php

namespace Model\P1_ValueObjects\Tests;

use Model\P1_ValueObjects\TeacherId;
use Model\P1_ValueObjects\Lesson;
use Model\P1_ValueObjects\Subject;
use Model\P1_ValueObjects\Time;
use Model\P1_ValueObjects\TimeSlot;
use Model\P1_ValueObjects\Weekday;
use Model\P1_ValueObjects\WeeklyTimeSlot;

final class LessonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $scheduledLesson = new Lesson(
            new WeeklyTimeSlot(Weekday::Monday(), new TimeSlot(new Time("10:00"), new Time("11:00"))),
            new Subject('Programming'),
            new TeacherId("1234")
        );

        $expected = "Monday 10:00-11:00 Programming with 1234";

        $this->assertEquals(
            $expected,
            (string)$scheduledLesson
        );
    }
}
 