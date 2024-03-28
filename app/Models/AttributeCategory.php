<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeCategory extends Pivot
{
    protected $table = 'attribute_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id',
        'category_id',
    ];

    public function attributeCategories(): HasMany
    {
        return $this->hasMany(AttributeCategory::class, 'attribute_id');
    }
}
