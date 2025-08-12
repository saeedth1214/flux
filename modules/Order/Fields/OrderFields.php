<?php

namespace Modules\Order\Fields;

final class OrderFields
{
    /**
     * table name
     */
    public const _TABLE = 'orders';

    /**
     * foreign key name for relation
     */
    public const _FOREIGN_KEY = 'order_id';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _USER_ID = 'user_id';
    public const _TOTAL_PRICE = 'total_price';
    public const _QUANTITY = 'quantity';

    /**
     * relations
     */
    public const _ORDER_ITEMS_TABLE = 'order_items';
}
