<?php

namespace App\Models;

use App\Models\Church;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Predication extends Model
{
    use HasFactory;
    public function church(){
        return $this->belongsTo(Church::class);
    }
}
