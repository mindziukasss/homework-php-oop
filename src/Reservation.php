<?php

/**
 * Class Reservation
 */
class Reservation
{
    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var DateTime
     */
    private $endDate;

    /**
     * @var Guest
     */
    private $guest;

    /**
     * Reservation constructor.
     *
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param Guest    $guest
     */
    public function __construct(DateTime $startDate, DateTime $endDate, Guest $guest)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     *
     * @return Reservation
     */
    public function setStartDate(DateTime $startDate): Reservation
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     *
     * @return Reservation
     */
    public function setEndDate(DateTime $endDate): Reservation
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Guest
     */
    public function getGuest(): Guest
    {
        return $this->guest;
    }

    /**
     * @param Guest $guest
     *
     * @return Guest|null
     */
    public function setGuest(Guest $guest): ?Guest
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $startDate = $this->startDate->format('Y-m-d');
        $endDate = $this->endDate->format('Y-m-d');
        return "from <time>$startDate</time> to <time>$endDate</time>!";
    }
}