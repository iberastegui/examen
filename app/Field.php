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

    public static function createFields(Game $game)
    {
        for ($row = 1; $row <= $game->rows; $row++) {
            for ($column = 1; $column <= $game->columns; $column++) {
                $status_id = rand(1, 2);
                $values['coordinate_x'] = $column;
                $values['coordinate_y'] = $row;

                $values['status_id'] = $status_id;
                $values['current_status_id'] = $status_id;

                $game->fields()->create($values);
            }
        }

        return $game->fields->sortBy('coordinate_y,coordinate_x');
    }
}
