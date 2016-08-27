<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Countries
 * @package App
 */
class Countries extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['country'];
}
