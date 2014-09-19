<?php


namespace Model\LessonSchedule\Tests;


use InvalidArgumentException;
use Model\LessonSchedule\GroupName;

final class GroupNameTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function throws_for_malformed_groupNames()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        new GroupName('7A');
    }
}
 