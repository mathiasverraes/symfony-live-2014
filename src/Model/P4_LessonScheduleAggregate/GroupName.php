<?php

namespace Model\P4_LessonScheduleAggregate;

final class GroupName
{
    private $groupName;

    public function __construct($groupName)
    {
        \Assert\that($groupName)->regex('/[1-6][A-F]/');
        $this->groupName = $groupName;
    }

} 