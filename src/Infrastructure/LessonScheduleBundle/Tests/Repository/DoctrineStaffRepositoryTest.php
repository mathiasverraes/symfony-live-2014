<?php
namespace Infrastructure\LessonScheduleBundle\Tests\Repository;

use Model\LessonSchedule2\StaffRepository;

final class DoctrineStaffRepositoryTest extends StaffRepositoryTest
{
    /**
     * @return StaffRepository
     */
    protected function getSUT()
    {
        throw new \Exception("@richard");
        return new DoctrineStaffRepository();
    }
}
 