<?php

namespace Neworder\PayYun;

use Flarum\Extend;

return [
    (new Extend\ServiceProvider())
        ->register(Provider\PayYunServiceProvider::class),
];