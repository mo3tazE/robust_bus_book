<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['from', 'to', 'dates'];
    
    public function buses()
    {
        return $this->hasMany(Bus::class, 'trip_id', 'id');
    }
    public function getTripIds($startingStation, $destinationStation)
    {
        return $this->where('from', '<=', $startingStation)
            ->where('to', '>=', $destinationStation)
            ->pluck('id');
    }
    public function bookedSeats()
    {
        return $this->hasMany(Booking::class, 'from','trip_id');
    }
}
