<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class City extends Model
{
    //
    use HasFactory;
    protected $table = "cities";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function branch(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
