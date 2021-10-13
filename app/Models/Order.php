<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const REATED = "REATED";
    const PAYED = "PAYED";
    const REJECTED = "REJECTD";

    public static function statusType()
    {
        //set values of columns status order
        return [
            self::REATED,
            self::PAYED,
            self::REJECTED
        ];
    }
}
