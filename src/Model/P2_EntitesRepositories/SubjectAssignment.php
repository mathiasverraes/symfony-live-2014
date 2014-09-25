<?php

namespace Model\P2_EntitesRepositories;

final class SubjectAssignment
{
    private $subjectAssignmentId;
    private $subject;
    private $teacher;

    public function __construct(Subject $subject, Teacher $teacher)
    {
        $this->subject = (string) $subject;
        $this->teacher = $teacher;
    }

    public function isFor(Subject $subject)
    {
        return $subject->equals(new Subject($this->subject));
    }
}