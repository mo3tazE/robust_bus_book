<?php

namespace App\Services;
use App\Models\Seat;
use App\Models\Booking;

class BookService {
 
   
    public function bookSeat($seat,$user_id)
    {
   
        if ($seat) {
            if ($seat->bus->getReservedSeatsCount() >= 12) {
                return ['seat_id' => null, 'message' => 'max seats reached for booking No available seats left for booking.'];
            }
            $seat->update(['availability' => 0]);
            $booking = new Booking();
            
            $booking->create([
                'user_id' => $user_id, 
                'trip_id' => $seat->bus->trip_id,
                'seat_id' => $seat->id,
                'trip_date' => now(),
            ]);
            return ['seat_id' => $seat->id,'bus_id'=>$seat->bus_id, 'trip_id'=>$seat->bus->trip_id,'message' => 'Seat booked successfully'];
        } else {
            return ['seat_id' => null, 'message' => 'No seats booked!'];
        }
    }
     
}