<?php

/**
 * Class Room
 */
class Room implements ReservableInterface
{

    /**
     * @var int
     */
    private $bedCount;

    /**
     * @var string
     */
    private $roomType;

    /**
     * @var bool
     */
    private $restroom;

    /**
     * @var bool
     */
    private $balcony;

    /**
     * @var string
     */
    private $extras;

    /**
     * @var int
     */
    private $roomNumber;

    /**
     * @var float
     */
    private $price;

    /**
     * @var array of Reservations
     */
    private $reservations = [];


    /**
     * @return int
     */
    public function getBedCount(): ?int
    {
        return $this->bedCount;
    }

    /**
     * @param int $bedCount
     *
     * @return Room
     */
    public function setBedCount(int $bedCount): Room
    {
        $this->bedCount = $bedCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoomType(): ?string
    {
        return $this->roomType;
    }

    /**
     * @param string $roomType
     *
     * @return Room
     */
    public function setRoomType(string $roomType): Room
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRestroom(): ?bool
    {
        return $this->restroom;
    }

    /**
     * @param bool $restroom
     *
     * @return Room
     */
    public function setRestroom(bool $restroom): Room
    {
        $this->restroom = $restroom;

        return $this;
    }

    /**
     * @return bool
     */
    public function isBalcony(): ?bool
    {
        return $this->balcony;
    }

    /**
     * @param bool $balcony
     *
     * @return Room
     */
    public function setBalcony(bool $balcony): Room
    {
        $this->balcony = $balcony;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtras(): string
    {
        return $this->extras;
    }

    /**
     * @param string $extras
     *
     * @return Room
     */
    public function setExtras(string $extras): Room
    {
        $this->extras = $extras;

        return $this;
    }

    /**
     * @return int
     */
    public function getRoomNumber(): ?int
    {
        return $this->roomNumber;
    }

    /**
     * @param int $roomNumber
     *
     * @return Room
     */
    public function setRoomNumber(int $roomNumber): Room
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Room
     */
    public function setPrice(float $price): Room
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return array
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Room <strong>" . $this->getRoomNumber() . "</strong>";
    }

    /**
     * @param $reservation
     *
     * @return mixed|void
     */
    public function addReservation($reservation)
    {
        array_push($this->reservations, $reservation);
    }

    /**
     * @param $reservation
     *
     * @return mixed|void
     */
    public function removeReservation($reservation)
    {
        array_diff($this->reservations, $reservation);
    }

}