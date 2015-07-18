<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'programme';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price_usd', 'gender', 'weeks', 'training_days', 'description'];


}
