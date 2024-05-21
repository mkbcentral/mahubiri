<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'civility',
        'birthdate',
        'civil_state_id',
        'phone',
        'email',
        'address',
        'church_id',
        'subscription_date',
        'member_function_id'
    ];

    /**
     * @return int
     */
    public function getAgeAttribute(): int
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }
    /**
     * Get the church that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function church(): BelongsTo
    {
        return $this->belongsTo(Church::class, 'church_id');
    }

    /**
     * Get the civilState that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function civilState(): BelongsTo
    {
        return $this->belongsTo(CivilState::class, 'civil_state_id');
    }

    /**
     * Get the memberFunction that owns the Member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function memberFunction(): BelongsTo
    {
        return $this->belongsTo(MemberFunction::class, 'member_function_id');
    }
}
