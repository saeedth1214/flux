<?php

namespace Modules\Category\Fields;

final class CategoryFields
{

    /**
     * table name
     */
    public const _TABLE = 'categories';

    /**
     * foreign key name for relation
     */
    public const _FOREIGN_KEY = 'category_id';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _NAME = 'name';
    public const _SLUG = 'slug';
    public const _PARENT_ID = 'parent_id';
}
