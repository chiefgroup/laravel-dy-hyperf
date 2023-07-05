# laravel-dy-hyperf

1. 在 config/app.php 注册 ServiceProvider 和 Facade (Laravel 5.5 + 无需手动注册)

```
'providers' => [
    // ...
    ChiefGroup\LaravelDy\ServiceProvider::class,
],
'aliases' => [
    // ...
    'BannerService' => ChiefGroup\LaravelDy\BannerServiceFacade::class,
],
```

2. 创建配置文件：php artisan vendor:publish --provider="ChiefGroup\LaravelDy\ServiceProvider"
3. 修改应用根目录下的 config/qf_dy.php 中对应的参数即可。
