<?php

declare(strict_types=1);

namespace Domain\Mobile\Actions\Common\Customer;

use Domain\Mobile\Models\Customer;

final class CustomerAction
{
    public static function execute(
        string $resource,
    ): Customer {
        // Get the customer
        return Customer::where(
            column: 'phone_number',
            operator: '=',
            value: $resource
        )->first();
    }
}
