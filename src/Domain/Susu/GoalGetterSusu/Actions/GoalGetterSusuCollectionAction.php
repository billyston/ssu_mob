<?php

declare(strict_types=1);

namespace Domain\Susu\GoalGetterSusu\Actions;

use App\Services\Susu\Requests\GoalGetterSusu\SusuServiceGoalGetterSusuCollectionRequest;
use Domain\Mobile\Models\Customer;

final class GoalGetterSusuCollectionAction
{
    public static function execute(Customer $customer): array
    {
        // Execute and return the GoalGetterSusuCollectionRequest
        return (new SusuServiceGoalGetterSusuCollectionRequest)->execute(customer: $customer);
    }
}
