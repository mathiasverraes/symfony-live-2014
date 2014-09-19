<?php

namespace Infrastructure\LessonScheduleBundle\Repository;

use Model\P2_EntitesRepositories\StaffRepository;
use Model\P2_EntitesRepositories\Subject;
use Model\P2_EntitesRepositories\Teacher;
use Model\P2_EntitesRepositories\TeacherId;

final class InMemoryStaffRepository implements StaffRepository
{
    private $staff = [];

    /**
     * @param Teacher $teacher
     * @return void
     */
    public function add(Teacher $teacher)
    {
        $this->staff[(string) $teacher->getTeacherId()] = $teacher;
    }

    /**
     * @param TeacherId $teacherId
     * @throws EntityNotFound
     * @return Teacher
     */
    public function get(TeacherId $teacherId)
    {
        if(!array_key_exists((string) $teacherId, $this->staff)) {
            throw new EntityNotFound;
        }
        return $this->staff[(string) $teacherId];
    }

    /**
     * @param Subject $subject
     * @return Teacher[]
     */
    public function teaching(Subject $subject)
    {
        return array_filter(
            $this->staff,
            function(Teacher $teacher) use ($subject) { return $teacher->teaches($subject); }
        );
    }
}