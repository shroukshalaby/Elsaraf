<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model {
    protected $table = "user_merchants";
    protected $connection = "payment_service";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
