<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Customer\LinkedAccount\LinkAccountApprovalController;
use App\Http\Controllers\V1\Customer\LinkedAccount\LinkAccountController;
use App\Http\Controllers\V1\Customer\LinkedAccount\LinkedAccountController;
use App\Http\Controllers\V1\Customer\LinkedAccount\LinkedAccountsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'linked-accounts', 'as' => 'linked-accounts.', 'middleware' => 'auth:customer'], function (): void {
    Route::post(
        uri: '',
        action: LinkAccountController::class
    )->name(
        name: 'store'
    );
    Route::post(
        uri: 'approval',
        action: LinkAccountApprovalController::class
    )->name(
        name: 'approval'
    );
    Route::get(
        uri: '',
        action: LinkedAccountsController::class
    )->name(
        name: 'index'
    );
    Route::get(
        uri: '{linked_account}',
        action: LinkedAccountController::class
    )->name(
        name: 'show'
    );
});
