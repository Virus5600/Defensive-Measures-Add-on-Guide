<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'type',
        'item_name',
        'image',
        'has_variants',
        'description',
        'usage',
        'obtaining',
        'crafting_recipe'
    ];
}