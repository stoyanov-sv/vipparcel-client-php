<?php

namespace stoyanov\vipparcel\request\account\personal;

use stoyanov\vipparcel\request\VipparcelRequest;

class AccountPersonalDetails extends VipparcelRequest
{
    public function info_method()
    {
        return self::METHOD_GET;
    }

    public function info_url()
    {
        return '/account/personalInfo/details';
    }

    public function info_params()
    {
        return array(
            'authToken'
        );
    }

}