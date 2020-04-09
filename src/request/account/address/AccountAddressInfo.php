<?php

namespace stoyanov\vipparcel\request\account\address;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountAddressInfo extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/address/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}