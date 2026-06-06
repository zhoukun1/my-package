<?php

use Illuminate\Support\Facades\Route;
use Zhou\MyPackage\MyPackage;

// 扩展包自带路由
Route::get('/my-package/hello', function () {
    $package = new MyPackage();
    return $package->hello('Laravel 开发者');
});