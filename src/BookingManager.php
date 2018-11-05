<?php

/**
 * Class BookingManager
 */
class BookingManager
{
    /**
     * @param Room        $room
     * @param Reservation $reservation
     */
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $room->addReservation($reservation);
        echo $room . " successfully booked for " . $reservation->getGuest() . " " . $reservation;
    }
}