<?php

namespace stoyanov\vipparcel\request\location\country;

use stoyanov\vipparcel\request\VipparcelRequest;

class LocationCountryList extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/location/country/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}