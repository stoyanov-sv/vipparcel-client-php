<?php

namespace stoyanov\vipparcel\request\shipping\pickup;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingPickupList extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/pickup/getList';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy',
        );
    }

}