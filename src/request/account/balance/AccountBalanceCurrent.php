<?php

namespace stoyanov\vipparcel\request\account\balance;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountBalanceCurrent extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/balance/getCurrent';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}