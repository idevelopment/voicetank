<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Labels
 * @package App
 */
class Labels extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name', 'color'];
}
