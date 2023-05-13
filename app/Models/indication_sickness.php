<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indication_sickness extends Model
{
    use HasFactory;
    protected $table = "indication_sickness";
    protected $primaryKey = 'id';
    protected $fillable = [
        'sickness_id',
        'indication_id',
    ];
}
