<?php

namespace stoyanov\vipparcel\request\shipping\label;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingLabelList extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/label/getList';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'limit',
            'offset',
            'orderBy',
            'optionalFields',
        );
    }

}