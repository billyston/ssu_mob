<?php

declare(strict_types=1);

namespace Domain\Customer\Jobs\Registration;

use App\Jobs\Customer\Registration\RegistrationActivatedMessage;
use Domain\Customer\Actions\Common\FetchCustomerAction;
use Domain\Customer\Actions\Registration\RegistrationActivationAction;
use Domain\Customer\Actions\Token\DeleteTokenAction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

final class RegistrationActivationJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    protected array $request;

    public function __construct(array $request)
    {
        $this->request = $request;
    }

    public function handle(): void
    {
        // Get the customer
        $customer = FetchCustomerAction::execute(
            request: $this->request
        );

        // Activate the customer account account
        RegistrationActivationAction::execute(
            customer: $customer
        );

        // Publish the CustomerActivatedMessage to the notification
        $customer->refresh();
        RegistrationActivatedMessage::dispatch(
            customer_data: $customer->toData()
        );

        // Delete the token after activation
        DeleteTokenAction::execute(
            customer: $customer
        );
    }
}
