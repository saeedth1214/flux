<?php

namespace Modules\Book\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Book\Fields\BookFields;

class Book extends Model
{
    protected $fillable = [
        BookFields::_TITLE,
        BookFields::_SLUG,
        BookFields::_AUTHOR,
        BookFields::_TYPE,
        BookFields::_STATUS,
        BookFields::_PRICE,
        BookFields::_WEIGHT,
        BookFields::_STOCK_QUANTITY,
        BookFields::_COVER_IMAGE,
        BookFields::_DESCRIPTION,
    ];
}
