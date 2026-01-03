<?php

use Illuminate\Support\Facades\Route;
use Modules\ACL\Http\Controllers\ACLController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('acls', ACLController::class)->names('acl');
});
