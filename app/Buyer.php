<?php

namespace App;

use App\Transaction;
use App\Scopes\BuyerScope;
use App\User;

class Buyer extends User
{
    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope(new BuyerScope);
    }

    public function transactions ()
    {
            return $this-> hasMany(Transaction::class);
    }
}
