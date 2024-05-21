<?php

namespace App\Domain\Features\Auth;

use App\Domain\Contract\Auth\IAuthContract;
use Illuminate\Support\Facades\Auth;

class AuthFeature implements IAuthContract
{
    /**
     * @param array $credentials
     * @return bool
     */
    public static function login(array $credentials): bool
    {
        return    Auth::attempt($credentials);
    }
}
