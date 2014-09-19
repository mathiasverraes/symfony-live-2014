<?php

namespace Model\P6_Commands;

use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\SchoolYear;
use Model\P4_LessonScheduleAggregate\WeeklyTimeSlot;
use Model\P5_Services\LessonScheduleRepository;

final class SwapLessonsCommandHandler
{
    /**
     * @var LessonScheduleRepository
     */
    private $lessonSchedules;

    // ctor...

    public function handle(SwapLessons $command)
    {
        $leftLessonSchedule = $this->lessonSchedules->get($command->getSchoolYear(), $command->getLeftGroup());
        $rightLessonSchedule = $this->lessonSchedules->get($command->getSchoolYear(), $command->getRightGroup());

        $leftLesson = $leftLessonSchedule->getLessonAt($command->getLeftSlot());
        $rightLesson = $rightLessonSchedule->getLessonAt($command->getRightSlot());

        $leftLessonSchedule->schedule($rightLesson);
        $rightLessonSchedule->schedule($leftLesson);
    }
} 