<?php

namespace Model\LessonSchedule;

final class EmployeeId
{
    private $employeeId;

    public function __construct($employeeId)
    {
        // some rule...

        $this->employeeId = $employeeId;
    }

    public function __toString()
    {
        return $this->employeeId;
    }


} 