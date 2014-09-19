<?php

namespace Model\P1_ValueObjects;

final class Lesson
{
    private $weeklyTimeSlot;
    private $teacher;
    private $subject;

    public function __construct(WeeklyTimeSlot $weeklyTimeSlot, Subject $subject, TeacherId $teacher))
    {
        $this->weeklyTimeSlot = $weeklyTimeSlot;
        $this->subject = $subject;
        $this->teacher = $teacher;
    }


}