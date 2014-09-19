<?php

namespace Model\P4_LessonScheduleAggregate;

final class Weekday 
{
    private $day;

    public function __construct($day)
    {
        \Assert\that($day)->inArray(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
        $this->day = $day;
    }

    public static function Monday() { return new Weekday('Monday'); }
    public static function Tuesday() { return new Weekday('Tuesday'); }
    public static function Wednesday() { return new Weekday('Wednesday'); }
    public static function Thursday() { return new Weekday('Thursday'); }
    public static function Friday() { return new Weekday('Friday'); }
    public static function Saturday() { return new Weekday('Saturday'); }
    public static function Sunday() { return new Weekday('Sunday'); }

    public function __toString()
    {
        return $this->day;
    }

}