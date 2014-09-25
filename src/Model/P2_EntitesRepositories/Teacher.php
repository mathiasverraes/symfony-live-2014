<?php

namespace Model\P2_EntitesRepositories;

use Doctrine\Common\Collections\ArrayCollection;

final class Teacher
{
    private $teacherId;
    private $name;
    private $subjectAssignments;

    public function __construct(TeacherId $teacherId, Name $name)
    {
        $this->teacherId = $teacherId;
        $this->name = $name;

        $this->subjectAssignments = new ArrayCollection();
    }

    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * @param Name $name
     */
    public function correctName(Name $name)
    {
        $this->name = $name;
    }

    public function assign(Subject $subject)
    {
        foreach ($this->subjectAssignments as $subjectAssignment) {
            if ($subjectAssignment->isFor($subject)) {
                return;
            }
        }

        $this->subjectAssignments->add(new SubjectAssignment($subject, $this));
    }

    public function teaches(Subject $subject)
    {
        foreach ($this->subjectAssignments as $subjectAssignment) {
            if ($subjectAssignment->isFor($subject)) {
                return true;
            }
        }
        return false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isIdentifiedBy(TeacherId $other)
    {
        return $this->teacherId->equals($other);
    }
}