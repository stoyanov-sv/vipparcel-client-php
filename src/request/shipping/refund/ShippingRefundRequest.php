<?php

namespace stoyanov\vipparcel\request\shipping\refund;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingRefundRequest extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/refund/request';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'refundLabels',
            'reason',
        );
    }

}
