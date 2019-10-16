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
        'coordinate_x', 'coordinate_y', 'status_id', 'game_id', 'current_status_id'
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

    public static function updateCurrentStatus($id, $status_id)
    {
        return User::where('id', $id)
            ->update(['current_status_id' => $status_id]);
    }
}
