<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RealEstate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'external_number', 'state_id', 'type', 'description', 'description_short', 'price', 'zip_code', 'square_meters',
        'rooms', 'land_area', 'house_data', 'city'
    ];

    protected $casts = [
        'house_data' => 'array',
    ];

    public function state () {
        return $this->hasOne(RealEstateState::class, 'id', 'state_id');
    }
}
