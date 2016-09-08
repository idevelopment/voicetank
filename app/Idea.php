<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idea
 * @package App
 */
class Idea extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['title', 'category_id', 'description'];

    /**
     * Idea -> category description.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
