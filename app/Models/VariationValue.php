<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariationValue extends Model
{
    protected $table = 'variation_values';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'variation_id',
        'label',
        'value',
    ];
}
