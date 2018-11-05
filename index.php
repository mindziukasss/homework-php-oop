<?php


require_once 'vendor/autoload.php';

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new \DateTime('2018-11-10');
$endDate = new \DateTime('2018-11-20');
$reservation = new Reservation($startDate, $endDate, $guest);
BookingManager::bookRoom($room, $reservation);

