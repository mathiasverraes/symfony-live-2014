<?php
namespace Infrastructure\LessonScheduleBundle\Tests\Repository;

use Infrastructure\LessonScheduleBundle\Repository\InMemoryStaffRepository;
use Model\LessonSchedule2\Subject;
use Model\LessonSchedule2\TeacherId;
use Model\LessonSchedule2\Name;
use Model\LessonSchedule2\Teacher;
use Model\LessonSchedule2\StaffRepository;
use PHPUnit_Framework_TestCase;

abstract class StaffRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var StaffRepository
     */
    protected $staff;


    /**
     * @return StaffRepository
     */
    abstract protected function getSUT();

    protected function setUp()
    {
        $this->staff = $this->getSUT();

        $grace = new Teacher(new TeacherId("12345"), new Name("Grace", "Hopper"));
        $grace->assign(new Subject("COBOL"));

        $alonzo = new Teacher(new TeacherId("95195"), new Name("Alonzo", "Church"));
        $alonzo->assign(new Subject("Lambda Calculus"));
        $alonzo->assign(new Subject("Algorithms"));

        $haskell = new Teacher(new TeacherId("45678"), new Name("Haskell", "Curry"));
        $haskell->assign(new Subject("Lambda Calculus"));
        $haskell->assign(new Subject("Schönfinkeling"));

        $ada = new Teacher(new TeacherId("98765"), new Name("Ada", "Lovelace"));
        $ada->assign(new Subject("Algorithms"));


        $this->staff->add($grace);
        $this->staff->add($alonzo);
        $this->staff->add($haskell);
        $this->staff->add($ada);
    }

    /**
     * @test
     */
    public function gets_by_id()
    {
        $teacher = $this->staff->get(new TeacherId('12345'));

        $this->assertEquals(
            "Grace Hopper",
            (string) $teacher->getName()
        );
    }

    /**
     * @test
     */
    public function filters_by_subject()
    {
        $teachers = $this->staff->teaching(new Subject("Lambda Calculus"));

        $this->assertCount(2, $teachers);
    }

}
 