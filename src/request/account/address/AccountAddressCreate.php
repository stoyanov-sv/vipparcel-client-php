<?php

namespace stoyanov\vipparcel\request\account\address;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountAddressCreate extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/account/address/create';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'addressType',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'address',
            'phone',
            'locationType',
            'countryId',
        );
    }

}