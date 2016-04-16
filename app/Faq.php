<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 * @package App
 * 
 * @property string, question
 * @property string, answer
 */
class Faq extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question', 'answer'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
