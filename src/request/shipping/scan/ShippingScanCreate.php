<?php

namespace stoyanov\vipparcel\request\shipping\scan;

use stoyanov\vipparcel\request\VipparcelRequest;

class ShippingScanCreate extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/scanForm/create';
    }

    public function info_params()
    {
        return array(
            'authToken',
            'labels',
            'address', // @TODO check array
        );
    }

}