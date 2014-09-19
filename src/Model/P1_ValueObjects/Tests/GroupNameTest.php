<?php


namespace Model\P1_ValueObjects\Tests;


use InvalidArgumentException;
use Model\P1_ValueObjects\GroupName;

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
 