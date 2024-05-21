<?php

namespace App\Domain\Contract\Member;

interface IMemberDashboard
{
    public  static function  getTotalMember():int;
    public  static function  getTotalMajorMember():int;
    public  static function  getTotalMinorMember():int;
    public  static function  getTotalMaleMember():int;
    public  static function  getTotalFemaleMember():int;
}
