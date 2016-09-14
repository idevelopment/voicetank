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
     * Creator relation -> used for the details off the creator.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Idea -> category description.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get all the comments for the feedback item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments()
    {
        return $this->belongsToMany('App\Comments')->withTimestamps();
    }
}
