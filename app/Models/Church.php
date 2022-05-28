<?php

namespace App\Models;

use App\Models\Predication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Church extends Model
{
    use HasFactory;
    public function predications(){
        return $this->hasMany(Predication::class);
    }
}
