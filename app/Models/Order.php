<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    const CREATED = "CREATED";
    const PAYED = "PAYED";
    const REJECTED = "REJECTD";

    public static function statusType()
    {
        //set values of columns status order
        return [
            self::CREATED,
            self::PAYED,
            self::REJECTED
        ];
    }
}
