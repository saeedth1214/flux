<?php

namespace Modules\Payment\Fields;

final class PaymentFields
{
    /**
     * table name
     */
    public const _TABLE = 'payments';

    /**
     * foreign key name for relation
     */
    public const _FOREIGN_KEY = 'payment_id';

    /**
     * fillables columns
     */
    public const _ID = 'id';
    public const _AMOUNT = 'amount';
    public const _TRANSACTION_ID = 'transaction_id';
    public const _GATEWAY = 'gateway';
    public const _STATUS = 'status';
}
