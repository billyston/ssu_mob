<?php

declare(strict_types=1);

namespace Domain\Customer\Actions\LinkedAccountSchemes;

use Illuminate\Support\Facades\Http;

final class LinkAccountSchemesCollectionAction
{
    public static function execute($auth_user): array
    {
        // TODO: Get Schemes from Cache or

        // Get Schemes from ssb_customer_service
        return Http::withHeaders([
            'Content-Type' => 'application/vnd.api+json',
            'Accept' => 'application/vnd.api+json',
        ])->get(url: config(key: 'services.ssb_customer.base_url').$auth_user->resource_id.'/schemes')->json();
    }
}
