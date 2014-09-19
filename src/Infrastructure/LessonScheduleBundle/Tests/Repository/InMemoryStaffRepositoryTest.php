<?php
namespace Infrastructure\LessonScheduleBundle\Tests\Repository;

use Infrastructure\LessonScheduleBundle\Repository\InMemoryStaffRepository;
use Model\LessonSchedule2\StaffRepository;
use Model\LessonSchedule2\Subject;
use Model\LessonSchedule2\TeacherId;

final class InMemoryStaffRepositoryTest extends StaffRepositoryTest
{
    /**
     * @return StaffRepository
     */
    protected function getSUT()
    {
        return new InMemoryStaffRepository();
    }
}
 