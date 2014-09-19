<?php

namespace Model\LessonSchedule1\Tests;

use Model\LessonSchedule1\SchoolYear;

final class SchoolYearTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function casts_to_string()
    {
        $this->assertEquals(
            "2014-'15",
            (string) SchoolYear::startingIn(2014)
        );
    }
}
 