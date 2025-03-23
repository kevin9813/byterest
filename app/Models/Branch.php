<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    //
    use HasFactory;
    protected $table = "branchs";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function company(){
        return $this->hasOne(Company::class, 'company_id');
    }

    public function city(){
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
