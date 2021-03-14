<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_balance extends Model
{
    protected $table = 'customer_balance';
    public $timestamps = false;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';
}
