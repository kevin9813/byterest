<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    //
    use HasFactory;
    protected $table = "companies";
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function branches(){
        return $this->hasMany(Branch::class, 'company_id');
    }
}
