<?php

namespace Model\LessonSchedule\Tests;

use Model\LessonSchedule\EmployeeId;
use Model\LessonSchedule\Lesson;
use Model\LessonSchedule\Subject;
use Model\LessonSchedule\Time;
use Model\LessonSchedule\TimeSlot;
use Model\LessonSchedule\Weekday;
use Model\LessonSchedule\WeeklyTimeSlot;

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
            new EmployeeId("1234")
        );

        $expected = "Monday 10:00-11:00 Programming with 1234";

        $this->assertEquals(
            $expected,
            (string)$scheduledLesson
        );
    }
}
 