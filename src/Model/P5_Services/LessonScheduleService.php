<?php

namespace Model\P5_Services;

use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\SchoolYear;
use Model\P4_LessonScheduleAggregate\WeeklyTimeSlot;

final class LessonScheduleService
{
    /**
     * @var LessonScheduleRepository
     */
    private $lessonSchedules;

    // ctor...

    public function swapLessons(SchoolYear $schoolYear, GroupName $leftGroup, WeeklyTimeSlot $leftSlot, GroupName $rightGroup, WeeklyTimeSlot $rightSlot)
    {
        $leftLessonSchedule = $this->lessonSchedules->get($schoolYear, $leftGroup);
        $rightLessonSchedule = $this->lessonSchedules->get($schoolYear, $rightGroup);

        $leftLesson = $leftLessonSchedule->getLessonAt($leftSlot);
        $rightLesson = $rightLessonSchedule->getLessonAt($rightSlot);

        $leftLessonSchedule->schedule($rightLesson);
        $rightLessonSchedule->schedule($leftLesson);
    }
} 