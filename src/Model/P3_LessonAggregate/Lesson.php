<?php

namespace Model\P3_LessonAggregate;

use Model\P1_ValueObjects\GroupName;
use Model\P1_ValueObjects\SchoolYear;
use Model\P1_ValueObjects\WeeklyTimeSlot;
use Model\P2_EntitesRepositories\Subject;
use Model\P2_EntitesRepositories\TeacherId;

/**
 * Lesson modelled as its own Aggregate
 */
final class Lesson
{
    private $groupName;
    private $subject;
    private $weeklyTimeSlot;
    private $teacherId;
    private $schoolYear;

    private function __construct(){}

    public static function schedule(Subject $subject, WeeklyTimeSlot $weeklyTimeSlot, TeacherId $teacherId, GroupName $groupName, SchoolYear $schoolYear)
    {
        $lesson = new Lesson();
        $lesson->groupName = $groupName;
        $lesson->schoolYear = $schoolYear;
        $lesson->weeklyTimeSlot = $weeklyTimeSlot;

        $lesson->subject = $subject;
        $lesson->teacherId = $teacherId;
    }

    public function reschedule(WeeklyTimeSlot $weeklyTimeSlot)
    {
        $this->weeklyTimeSlot = $weeklyTimeSlot;
    }
}