<?php

namespace Model\P1_ValueObjects;

final class WeeklyTimeSlot
{
    private $timeSlot;
    private $weekDay;

    public function __construct(WeekDay $weekDay, TimeSlot $timeSlot)
    {
        $this->weekDay = $weekDay;
        $this->timeSlot = $timeSlot;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->weekDay} {$this->timeSlot}";
    }

}