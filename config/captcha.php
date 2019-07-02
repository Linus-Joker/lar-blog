<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'secret' => env('CAPTCHA_SECRET', '6LfYtqsUAAAAAJEq0iIMDyUmsLd3h7PCYgmi7aJ0'),
    'sitekey' => env('CAPTCHA_SITEKEY', '6LfYtqsUAAAAACt7xctAux9VDfhmIHceyg5N0a6i'),
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in folder ``examples``
     */
    ' request_method ' => null,
    ' options ' => [
        ' multiple ' => false,
        ' lang ' => app()->getLocale(),
    ],
    ' attributes ' => [
        ' theme ' => ' light'
    ],
];
