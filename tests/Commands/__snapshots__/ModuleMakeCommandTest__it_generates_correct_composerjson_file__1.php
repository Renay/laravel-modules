<?php return '{
    "name": "renay/blog",
    "description": "",
    "authors": [
        {
            "name": "Roman Biz",
            "email": "renaay01@gmail.com"
        }
    ],
    "extra": {
        "laravel": {
            "providers": [
                "Modules\\\Blog\\\Providers\\\BlogServiceProvider"
            ],
            "aliases": {

            }
        }
    },
    "autoload": {
        "psr-4": {
            "Modules\\\\Blog\\\\": ""
        }
    }
}
';
