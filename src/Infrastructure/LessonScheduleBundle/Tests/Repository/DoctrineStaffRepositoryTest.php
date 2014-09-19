<?php
namespace Infrastructure\LessonScheduleBundle\Tests\Repository;

use Model\P2_EntitesRepositories\StaffRepository;

final class DoctrineStaffRepositoryTest extends StaffRepositoryTest
{
    /**
     * @return StaffRepository
     */
    protected function getSUT()
    {
        throw new \Exception("@Richard");
        return new DoctrineStaffRepository();
    }
}
 