<?php

/**
 * Interface ReservableInterface
 */
interface ReservableInterface
{
    /**
     * @param $reservation
     *
     * @return mixed
     */
    public function addReservation($reservation);


    /**
     * @param $reservation
     *
     * @return mixed
     */
    public function removeReservation($reservation);
}