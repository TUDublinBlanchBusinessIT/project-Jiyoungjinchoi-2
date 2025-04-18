<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Important if your table is not named 'gym_classes'

    protected $fillable = ['title', 'description', 'trainer_id', 'start_time', 'capacity'];

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}