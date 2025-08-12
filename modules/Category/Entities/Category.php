<?php

namespace Modules\Category\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Category\Fields\CategoryFields;

class Category extends Model
{
    protected $fillable = [
        CategoryFields::_NAME,
        CategoryFields::_SLUG,
    ];
}
