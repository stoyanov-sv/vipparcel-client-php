<?php

namespace stoyanov\vipparcel\request\shipping\label;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingLabelImages extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/shipping/label/getImages';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}