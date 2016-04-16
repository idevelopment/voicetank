<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Labels
 * @package App
 *
 * @property string, name
 * @property string, color
 */
class Labels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'color'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'deleted_at'];
}
