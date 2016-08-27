<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teams
 * @package App
 */
class Teams extends Model
{
    /**
     * Mass-assign
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    /**
     * Teams -> Departments controller.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departments()
    {
        return $this->belongsToMany('App\Departments', 'departments_teams', 'departments_id', 'teams_id');
    }
}
