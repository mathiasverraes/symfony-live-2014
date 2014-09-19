<?php

namespace Model\P1_ValueObjects;

final class LessonSchedule
{
    private $groupName;
    private $schoolYear;
    private $lessons = [];

    public function __construct(GroupName $groupName, SchoolYear $schoolYear)
    {
        $this->groupName = $groupName;
        $this->schoolYear = $schoolYear;
    }

    public function schedule(Lesson $lesson)
    {
        $lessonSchedule = clone($this);
        $this->lessons[] = $lesson;
        return $lessonSchedule;
    }

}