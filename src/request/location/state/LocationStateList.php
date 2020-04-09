<?php

namespace stoyanov\vipparcel\request\location\state;

use stoyanov\vipparcel\request\VipparcelRequest;

class LocationStateList extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/location/state/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}