<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookSeatRequest;
use App\Models\Booking;
use App\Models\Seat;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\BookingService;
use App\Services\BookService;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class FleetController extends Controller
{
    //

    public function book(BookSeatRequest $request, BookService $bookService, Trip $trip, Seat $seat)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            // If authentication fails, return an error response
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $validated = $request->validated();
        $startingStation = $validated['from'];
        $destinationStation = $validated['to'];
        $user_id = $user->id;
        $tripIds = $trip->getTripIds($startingStation, $destinationStation);
        $availableSeat = $seat->getAvailableSeats($tripIds);
        // dd($availableSeat);
        return  $bookService->bookSeat($availableSeat, $user_id);
    }

    public function listSeats(BookSeatRequest $request, Trip $trip, Seat $seat)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            $validated = $request->validated();
            $startingStation = $validated['from'];
            $destinationStation = $validated['to'];

            $tripIds = $trip->getTripIds($startingStation, $destinationStation);
            $availableSeats = $seat->getAvailableSeats($tripIds, true);
            return response()->json(['seats' => $availableSeats]);
        } catch (\Exception $e) {
            // If authentication fails, return an error response
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
