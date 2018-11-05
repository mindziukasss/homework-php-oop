<?php

/**
 * Class SingleRoom
 */
class SingleRoom extends Room
{
    /**
     * SingleRoom constructor.
     *
     * @param int   $roomNumber
     * @param float $price
     */
    public function __construct(int $roomNumber, float $price)
    {
        $this->setBedCount(1);
        $this->setRoomType('Standart');
        $this->setRestroom(true);
        $this->setBalcony(false);
        $this->setExtras('TV, air-conditioner');
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }

}