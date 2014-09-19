<?php

namespace Model\LessonSchedule1\Tests;

use Model\LessonSchedule1\TeacherId;
use Model\LessonSchedule1\Lesson;
use Model\LessonSchedule1\Subject;
use Model\LessonSchedule1\Time;
use Model\LessonSchedule1\TimeSlot;
use Model\LessonSchedule1\Weekday;
use Model\LessonSchedule1\WeeklyTimeSlot;

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
 