<?php

namespace Neworder\PayYun\Service;

use Illuminate\Contracts\Container\Container;

class SingletonReg
{
    /**
     * Register services into the Flarum IoC container.
     *
     * @param Container $container
     */
    public function register(Container $container)
    {
        // 在这里注册服务单例（目前留空即可）
        // 示例：
        // $container->singleton(MyService::class, function ($container) {
        //     return new MyService();
        // });
    }
}
