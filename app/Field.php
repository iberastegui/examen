<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'coordinate_x', 'coordinate_y', 'status', 'game_id'
    ];


    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function currentStatus()
    {
        return $this->belongsTo('App\Status');
    }
}
