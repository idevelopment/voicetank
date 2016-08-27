<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teams
 * @package App
 */
class Teams extends Model
{
    /**
     * Mass-assign
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
}
