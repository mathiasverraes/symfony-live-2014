<?php

namespace Model\LessonSchedule1;

final class Time
{
    private $time;

    public function __construct($time)
    {
        \Assert\that($time)->regex('/[0-2][0-9]\:[0-5][0-9]/');
        list($hours, $minutes) = explode(':', $time);
        \Assert\that($hours)->integerish()->range(0, 23);
        \Assert\that($minutes)->integerish()->range(0, 59);
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->time;
    }

}
