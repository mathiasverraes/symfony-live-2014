<?php

namespace Model\LessonSchedule1;

final class TeacherId
{
    private $teacherId;

    public function __construct($teacherId)
    {
        \Assert\that($teacherId)->string();
        // probably some regex validation...

        $this->teacherId = $teacherId;
    }

    public function __toString()
    {
        return $this->teacherId;
    }


} 