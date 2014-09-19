<?php

namespace Model\P4_LessonScheduleAggregate;

use Doctrine\Common\Collections\ArrayCollection;

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

    public function schedule(WeeklyTimeSlot $weeklyTimeSlot, Subject $subject, TeacherId $teacherId)
    {
        $this->removeLessonAt($weeklyTimeSlot);
        $this->lessons->add(new Lesson($weeklyTimeSlot, $subject, $teacherId));
    }

    private function removeLessonAt(WeeklyTimeSlot $weeklyTimeSlot)
    {
        throw new \Exception("@TODO");
    }

}