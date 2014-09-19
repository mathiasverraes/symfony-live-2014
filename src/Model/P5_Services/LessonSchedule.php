<?php

namespace Model\P5_Services;

use Doctrine\Common\Collections\ArrayCollection;
use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\Lesson;
use Model\P4_LessonScheduleAggregate\SchoolYear;
use Model\P4_LessonScheduleAggregate\WeeklyTimeSlot;

final class LessonSchedule
{
    private $groupName;
    private $schoolYear;
    private $lessons;

    public function __construct(GroupName $groupName, SchoolYear $schoolYear)
    {
        $this->groupName = $groupName;
        $this->schoolYear = $schoolYear;
        $this->lessons = new ArrayCollection();
    }

    /**
     * @param WeeklyTimeSlot $weeklyTimeSlot
     * @return Lesson
     */
    public function getLessonAt(WeeklyTimeSlot $weeklyTimeSlot)
    {
        throw new \Exception("@TODO");
    }

    public function schedule(Lesson $lesson)
    {
        throw new \Exception("@TODO");
    }

}