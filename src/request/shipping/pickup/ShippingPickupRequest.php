<?php

namespace stoyanov\vipparcel\request\shipping\pickup;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingPickupRequest extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/pickup/request';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'address', // @TODO array
            'packages',
            'packageLocation',
            'specialInstructions',
        );
    }

}