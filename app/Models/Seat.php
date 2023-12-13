<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['bus_id', 'dates', 'availability'];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
     
    public function getAvailableSeats($tripIds,$allSeats = false)
    {
        $query= $this->whereIn('bus_id', function ($query) use ($tripIds) {
                $query->select('id')
                    ->from('buses')
                    ->whereIn('trip_id', $tripIds);
            })
            ->where('availability', true);
           
            if ($allSeats) {
                return $query->get();
            } else {
                return $query->first();
            }
           // return $allSeats ? $query->get() : $query->first();
            
    }

    public function bookSeat($seat)
    {
        if ($seat) {
            $seat->update(['availability' => 0]);
            
            return ['seat_id' => $seat->id, 'message' => 'Seat booked successfully'];
        }else{
            return ['seat_id' => NULL ,'message' => 'NO Seats booked!'];

        }
    }
}
