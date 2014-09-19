<?php

namespace Model\P4_LessonScheduleAggregate;

final class Lesson // Child Entity
{
    private $weeklyTimeSlot;
    private $teacher;
    private $subject;

    public function __construct(WeeklyTimeSlot $weeklyTimeSlot, Subject $subject, TeacherId $teacher)
    {
        $this->weeklyTimeSlot = $weeklyTimeSlot;
        $this->subject = $subject;
        $this->teacher = $teacher;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s %s with %s", $this->weeklyTimeSlot, $this->subject, $this->teacher);
    }
}