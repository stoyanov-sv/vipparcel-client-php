<?php

namespace stoyanov\vipparcel\request\account\personal;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountPersonalUpdate extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_PUT;
    }

    public function info_url()
    {
        return '/account/personalInfo/update';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'firstName',
            'lastName',
            'state',
            'city',
            'postalCode',
            'streetAddress1',
            'streetAddress2',
            'driverLicence',
        );
    }

}