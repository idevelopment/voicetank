<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['title', 'category_id', 'description'];
}
