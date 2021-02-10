<?php


namespace App\Repositories\AirlineBookingProcess;

// HERE WE ARE DEFINING THE BASIC STRCUTURE OF OUR BOOKING PROCESS


interface AirlineBookingProcess
{
    // FIRST GET AVAILABE SEATS
    public function getAvailableSeats($airline_id);

    //CHECK AND ASSIGN SEATS TO PASSENGER

    public function assignSeats();

    //ACCEPT PASSENGER BOOKING

    public function acceptPassengerBooking();

    //GET PASSGNGER LIST BY AIRLINE ID

    public function getPassengerList($booking_number);

    // GET AIRCRAFT INFO

    public function getAircraftInfo();

}
