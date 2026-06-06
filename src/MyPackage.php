<?php

namespace Zhou\MyPackage;

class MyPackage
{
    // 示例方法：打招呼
    public function hello(string $name): string
    {
        return "Hello, {$name}! 欢迎使用 Laravel 11 扩展包";
    }

    // 获取配置
    public function getConfig(): array
    {
        return config('my-package');
    }
}