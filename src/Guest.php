<?php

/**
 * Class Guest
 */
class Guest
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * Guest constructor.
     *
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return Guest
     */
    public function setFirstName(string $firstName): Guest
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Guest
     */
    public function setLastName(string $lastName): Guest
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "<strong>" . $this->firstName . " " . $this->lastName . "</strong>";
    }
}