<?php

/**
 * Class Apartment
 */
class Apartment extends Room
{
    /**
     * Apartment constructor.
     *
     * @param int   $roomNumber
     * @param float $price
     */
    public function __construct(int $roomNumber, float $price)
    {
        $this->setBedCount(4);
        $this->setRoomType('Diamond');
        $this->setRestroom(true);
        $this->setBalcony(true);
        $this->setExtras('TV, air-conditioner, refrigerator, kitchen box, mini-bar, bathtub, free Wi-fi');
        $this->setRoomNumber($roomNumber);
        $this->setPrice($price);
    }

}
