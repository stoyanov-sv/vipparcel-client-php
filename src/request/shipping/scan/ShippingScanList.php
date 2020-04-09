<?php

namespace stoyanov\vipparcel\request\shipping\scan;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingScanList extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/scanForm/getList';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}