<?php

namespace stoyanov\vipparcel\request\account\address;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountAddressDelete extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_DELETE;
    }

    public function info_url()
    {
        return '/account/address/delete';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}