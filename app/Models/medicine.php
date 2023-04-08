<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;
    protected $table = "medicines";
    protected $primaryKey = 'id';
    protected $fillable = [
        'medicine_name',
        'medicine_information',
    ];
    public function Sickness(){
        return $this->hasMany(Sickness::class, 'id');
    }
}