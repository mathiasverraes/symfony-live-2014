<?php

namespace Model\LessonSchedule2;

use Doctrine\Common\Collections\ArrayCollection;

final class Teacher
{
    private $teacherId;
    private $name;
    private $subjects = [];

    public function __construct(TeacherId $teacherId, Name $name)
    {
        $this->teacherId = $teacherId;
        $this->name = $name;

        $this->subjects = new ArrayCollection();
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
        foreach ($this->subjects as $existingSubject) {
            if ($subject->equals($existingSubject)) {
                return;
            }
        }
        $this->subjects[] = $subject;
    }

    public function teaches(Subject $subject)
    {
        foreach ($this->subjects as $assignedSubject) {
            if ($assignedSubject->equals($subject)) {
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