<?php

namespace Model\P5_Services;

use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\SchoolYear;

interface LessonScheduleRepository
{
    /**
     * @param SchoolYear $schoolYear
     * @param GroupName $groupName
     * @return LessonSchedule
     */
    public function get(SchoolYear $schoolYear, GroupName $groupName);
}