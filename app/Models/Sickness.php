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
    public function medicine(){
        return $this->belongsTo(medicine::class, 'medicine_id');
    }
}
