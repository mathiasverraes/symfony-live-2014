<?php


namespace Model\LessonSchedule1\Tests;


use InvalidArgumentException;
use Model\LessonSchedule1\GroupName;

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
 