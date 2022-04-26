<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'policy_number',
        'client_id',
        'product_id',
        'building_coverage',
        'content_coverage',
        'building_address',
        'building_city_id',
        'coverage_date_from',
        'coverage_date_to',
    ];
}
