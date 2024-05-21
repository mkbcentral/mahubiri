<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MemberFunction extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'church_id'];
    /**
     * Get all of the members for the MemberFunction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
