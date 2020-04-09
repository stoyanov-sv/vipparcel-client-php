<?php

namespace stoyanov\vipparcel\request\shipping\tracking;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingTrackingInfo extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/tracking/getInfo';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'trackNumber',
        );
    }

}