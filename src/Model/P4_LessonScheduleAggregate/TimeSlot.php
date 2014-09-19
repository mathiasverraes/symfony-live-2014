<?php

namespace Model\P4_LessonScheduleAggregate;

final class TimeSlot 
{
    /**
     * @var Time
     */
    private $startTime;
    /**
     * @var Time
     */
    private $endTime;

    public function __construct(Time $startTime, Time $endTime)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->startTime}-{$this->endTime}";
    }


} 