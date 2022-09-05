<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesma extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'duration', 'award', 'izvodjac_id', 'album_id', 'user_id'];
    public function album()
    {

        return $this->belongsTo(Album::class);
    }

    public function izvodjac()
    {

        return $this->belongsTo(Izvodjac::class);
    }
    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
