<?php

declare(strict_types=1);

namespace Domain\Susu\GoalGetterSusu\Actions\Payment;

use App\Services\Susu\Requests\GoalGetterSusu\Payment\GoalGetterSusuPaymentApprovalRequest;
use Domain\Mobile\Models\Customer;

final class GoalGetterSusuPaymentApprovalAction
{
    public static function execute(Customer $customer, string $susu, string $payment, array $request): array
    {
        // Execute the GoalGetterSusuCreateRequest
        return (new GoalGetterSusuPaymentApprovalRequest)->execute(customer: $customer, susu: $susu, payment: $payment, request: $request);
    }
}
