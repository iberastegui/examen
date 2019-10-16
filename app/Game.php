<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rows', 'columns',
    ];

    public function fields()
    {
        return $this->hasMany('App\Field');
    }
}
