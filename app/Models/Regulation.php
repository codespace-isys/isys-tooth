<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;
    protected $table = "regulations";
    protected $primaryKey = 'id';
    protected $fillable = [
        'sickness_id',
        'indication_id',
    ];
    public function indication(){
        return $this->belongsTo(indication::class, 'indication_id');
    }
    public function sickness(){
        return $this->belongsTo(Sickness::class, 'sickness_id');
    }
}
