<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Mass assign-fields
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Category -> idea relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ideas()
    {
        return $this->belongsTo('App\Idea');
    }
}
