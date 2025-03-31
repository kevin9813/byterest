<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Log extends Model
{
    use HasFactory;
    protected $table = "logs";
    protected $primaryKey = 'id';
    public $timestamps = true;


    protected $fillable = [
        'company_id', 'user_id', 'action', 'model', 'model_id', 'old_values', 'new_values'
    ];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
