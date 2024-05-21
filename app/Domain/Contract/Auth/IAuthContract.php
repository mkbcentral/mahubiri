<?php

namespace App\Domain\Contract\Auth;

interface  IAuthContract
{
    public static function login(array $credentials):bool;
}
