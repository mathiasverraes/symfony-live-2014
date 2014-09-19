<?php

namespace Model\P1_ValueObjects\Tests;

use Model\P1_ValueObjects\SchoolYear;

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
 