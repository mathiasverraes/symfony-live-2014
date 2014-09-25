<?php

namespace Model\P2_EntitesRepositories;

final class Subject
{
    private $subject;

    public function __construct($subject)
    {
        \Assert\that($subject)->string()->betweenLength(1, 64);
        $this->subject = $subject;
    }

    public function __toString()
    {
        return $this->subject;
    }

    public function equals(Subject $other)
    {
        return $this->subject == $other->subject;
    }
}
