<?php

namespace Zhou\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    // 注册：绑定容器、加载配置、路由等
    public function register()
    {
        // 1. 加载配置文件
        $this->mergeConfigFrom(
            __DIR__.'/config/my-package.php', 'my-package'
        );
    }

    // 启动：发布资源、注册中间件等
    public function boot()
    {
        // 2. 加载路由
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // 3. 加载迁移文件
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        // 4. 发布配置文件（用户执行 vendor:publish --tag=my-package-config 时可用）
        $this->publishes([
            __DIR__.'/config/my-package.php' => config_path('my-package.php'),
        ], 'my-package-config');
    }
}