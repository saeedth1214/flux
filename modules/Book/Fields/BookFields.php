<?php

namespace Modules\Book\Fields;

final class BookFields
{
    /**
     * table name
     */
    public const _TABLE = 'books';

    /**
     * foreign key name for relation
     */
    public const _FOREIGN_KEY = 'book_id';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _TITLE = 'title';
    public const _SLUG = 'slug';
    public const _AUTHOR = 'author';
    public const _TYPE = 'type';
    public const _STATUS = 'status';
    public const _PRICE = 'price';
    public const _WEIGHT = 'weight';
    public const _STOCK_QUANTITY = 'stock_quantity';
    public const _COVER_IMAGE = 'cover_image';
    public const _DESCRIPTION = 'description';

    /**
     * relations
     */
    public const _BOOK_CATEGORY_TABLE = 'book_category';
    public const _BOOK_TRANSLATOR_TABLE = 'book_translator';
}
