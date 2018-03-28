<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    /**
     * @var string
     */
    public $table = 'announces';

    /**
     * @return array
     */
    public function getAll()
    {
        return $this::all()->toArray();
    }

    public function getById($id)
    {
        return $this::where('id', $id)->first()->toArray();
    }


}
