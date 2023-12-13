<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'order', 'dates'];

    public function trips()
    {
        return $this->hasMany(Trip::class, 'from', 'id');
    }
}
