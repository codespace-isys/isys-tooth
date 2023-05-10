<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $table = "results";
    protected $primaryKey = 'id';
    protected $fillable = [
        'datetime',
        'indication_id',
        'sickness_id',
        'user_id',
    ];
    public function indication(){
        return $this->belongsToMany(indication::class)->withTimestamps();
    }
    public function sickness(){
        return $this->belongsTo(Sickness::class, 'sickness_id'); 
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
