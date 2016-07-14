<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    /**
     * Mass-assign fields
     * 
     * @var array
     */
    protected $fillable = ['title', 'user_id', 'idea'];

    /**
     * Hidden fields
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * User relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
