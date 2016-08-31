<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departments
 * @package App
 */
class Departments extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];


    /**
     * Departments -> manager relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managers()
    {
        return $this->belongsToMany('App\User');
    }
}
