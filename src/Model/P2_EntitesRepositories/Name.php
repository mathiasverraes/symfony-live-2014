<?php

namespace Model\P2_EntitesRepositories;

final class Name
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        \Assert\that($firstName)->string()->minLength(2);
        \Assert\that($lastName)->string()->minLength(2);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return sprintf("%s %s", $this->firstName, $this->lastName);
    }
}