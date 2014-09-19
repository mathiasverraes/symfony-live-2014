<?php

namespace Model\LessonSchedule;

final class Lesson
{
    private $weeklyTimeSlot;
    private $teacher;
    private $subject;

    public function __construct(WeeklyTimeSlot $weeklyTimeSlot, Subject $subject, EmployeeId $teacher)
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