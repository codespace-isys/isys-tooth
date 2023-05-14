<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sickness extends Model
{
    use HasFactory;
    protected $table = "sicknesses";
    protected $primaryKey = 'id';
    protected $fillable = [
        'sickness_name',
        'sickness_image',
        'sickness_description',
        'sickness_solution',
        'medicine_id',
    ];
    public function ShowMedicine(){
        return $this->belongsTo(medicine::class, 'medicine_id'); 
    }
    public function indication(){
        return $this->belongsToMany(indication::class)->withTimestamps(); 
    }
    public function indications(){
        return $this->belongsToMany(indication::class, 'indication_sickness', 'sickness_id','indication_id');
    }
    public function medicine(){
        return $this->belongsToMany(medicine::class)->withTimestamps(); 
    }
    public function medicines(){
        return $this->belongsToMany(medicine::class, 'medicine_sickness', 'sickness_id','medicine_id');
    }
    public function Result(){
        return $this->hasMany(Results::class, 'id');
    }
}
