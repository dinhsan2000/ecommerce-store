<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Variation extends Model
{
    protected $table = 'variations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type'
    ];

    public function variationValues(): HasMany
    {
        return $this->hasMany(VariationValue::class, 'variation_id', 'id');
    }
}
