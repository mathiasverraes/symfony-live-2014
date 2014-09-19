<?php

namespace Model\LessonSchedule1;

final class SchoolYear
{
    private $startYear;

    private function __construct(){}

    public static function startingIn($startYear)
    {
        \Assert\that($startYear)->integer()->range(2000, 2100);
        $schoolYear = new SchoolYear();
        $schoolYear->startYear = $startYear;
        return $schoolYear;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->startYear}-'".substr($this->getEndYear(), 2);
    }

    private function getEndYear()
    {
        return $this->startYear + 1;
    }

}