<?php

use Hridoy\PrivacyPolicy\Http\Controllers\PrivacyPolicyController;
use Illuminate\Support\Facades\Route;

$routePrefix = config('privacy_policy.route.prefix');
$routeGuard = config('privacy_policy.route.guard');

$groupRules = [];
if ($routePrefix) {
    $groupRules['prefix'] = $routePrefix;
}
if ($routeGuard) {
    $groupRules['middleware'] = $routeGuard;
}
Route::group(['prefix' => $routePrefix], function () {
    Route::apiResource('privacy-policy', PrivacyPolicyController::class)->only('index', 'show');
});
Route::group($groupRules, function () {
    Route::apiResource('privacy-policy', PrivacyPolicyController::class)->except('index', 'show');
});
