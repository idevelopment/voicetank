<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comments
 * @package App
 */
class Comments extends Model
{
    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['user_id', 'comment'];

    /**
     * Comment -> user relation. To get the user information about the comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
