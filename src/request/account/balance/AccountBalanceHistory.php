<?php

namespace stoyanov\vipparcel\request\account\balance;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountBalanceHistory extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/balance/getHistory';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy'
        );
    }

}