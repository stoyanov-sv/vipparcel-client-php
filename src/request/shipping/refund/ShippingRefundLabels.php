<?php

namespace stoyanov\vipparcel\request\shipping\refund;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingRefundLabels extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/refund/getLabels';
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