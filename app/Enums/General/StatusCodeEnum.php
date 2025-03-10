<?php

namespace App\Enums\General;

enum StatusCodeEnum
{
    const STATUS_OK=200;
    const STATUS_CREATED=201;
    const UNPROCESSABLE_ENTITY=422;
    const STATUS_NO_CONTENT=204;
    const STATUS_RESET_CONTENT=205;
    const STATUS_BAD_REQUEST=400;
    const STATUS_UNAUTHORIZED=401;
    const TOO_MANY_REQUESTS =429;
    const STATUS_NOT_AUTHENTICATED =402;
    const STATUS_FORBIDDEN=403;
    const STATUS_NOT_FOUND=404;
    const STATUS_VALIDATION=405;
    const STATUS_NOT_VERIFIED = 421;
    const SUBSCRIPTION_EXPIRED = 426;
    const INTERNAL_SERVER_ERROR = 500;

}
