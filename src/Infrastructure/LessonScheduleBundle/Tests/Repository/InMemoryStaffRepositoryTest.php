<?php
namespace Infrastructure\LessonScheduleBundle\Tests\Repository;

use Infrastructure\LessonScheduleBundle\Repository\InMemoryStaffRepository;
use Model\P2_EntitesRepositories\StaffRepository;
use Model\P2_EntitesRepositories\Subject;
use Model\P2_EntitesRepositories\TeacherId;

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
 