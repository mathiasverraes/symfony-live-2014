<?php

namespace Model\P6_Commands;

use Model\P4_LessonScheduleAggregate\GroupName;
use Model\P4_LessonScheduleAggregate\SchoolYear;
use Model\P4_LessonScheduleAggregate\WeeklyTimeSlot;

final class SwapLessons
{
    /**
     * @var SchoolYear
     */
    private $schoolYear;
    /**
     * @var GroupName
     */
    private $leftGroup;
    /**
     * @var WeeklyTimeSlot
     */
    private $leftSlot;
    /**
     * @var GroupName
     */
    private $rightGroup;
    /**
     * @var WeeklyTimeSlot
     */
    private $rightSlot;

    public function __construct(
        SchoolYear $schoolYear,
        GroupName $leftGroup,
        WeeklyTimeSlot $leftSlot,
        GroupName $rightGroup,
        WeeklyTimeSlot $rightSlot
    ) {

        $this->schoolYear = $schoolYear;
        $this->leftGroup = $leftGroup;
        $this->leftSlot = $leftSlot;
        $this->rightGroup = $rightGroup;
        $this->rightSlot = $rightSlot;
    }

    /**
     * @return GroupName
     */
    public function getLeftGroup()
    {
        return $this->leftGroup;
    }

    /**
     * @return WeeklyTimeSlot
     */
    public function getLeftSlot()
    {
        return $this->leftSlot;
    }

    /**
     * @return GroupName
     */
    public function getRightGroup()
    {
        return $this->rightGroup;
    }

    /**
     * @return WeeklyTimeSlot
     */
    public function getRightSlot()
    {
        return $this->rightSlot;
    }

    /**
     * @return SchoolYear
     */
    public function getSchoolYear()
    {
        return $this->schoolYear;
    }


} 