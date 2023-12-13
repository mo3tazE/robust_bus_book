<?php

namespace App\Providers;

use App\Models\Seat;
use Illuminate\Support\ServiceProvider;

class BookingService extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public function test()
    {
echo "Asd";exit;
    }
    public function bookSeat(Seat $seat, $userId, $tripId)
    {
        dd('d');
        $seat->update(['availability' => 0]);   
        $booking = $seat->bookings()->create([
            'user_id' => $userId,
            'trip_id' => $tripId,
            'trip_date' => now(),
        ]);

        return $booking;
    }
}
