<?php

/**
 * Class Bedroom
 */
class Bedroom extends Room
{
    /**
     * Bedroom constructor.
     *
     * @param int   $roomNumber
     * @param float $price
     */
    public function __construct(int $roomNumber, float $price)
    {
        $this->setBedCount(2);
        $this->setRoomType('Gold');
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setExtras('TV, air-conditioner, refrigerator, mini-bar, bathtub');
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }
}