<?php

namespace stoyanov\vipparcel\request\shipping\label;

use stoyanov\vipparcel\request\VipparcelRequest;
use stoyanov\vipparcel\request\VipparcelException;

class ShippingLabelPrint extends VipparcelRequest
{

    public function is_international()
    {
        if (empty($this->_params['mailClass'])) {
            throw new VipparcelException('Required parameter not passed: mailClass');
        }
        return (strpos($this->_params['mailClass'], 'International') !== FALSE);
    }

    public function info_method()
    {
        return self::METHOD_POST;
    }

    public function info_url()
    {
        return '/shipping/label/print';
    }

    public function get_params()
    {
        // @TODO deprecated
        $this->_params['labelType'] = ($this->is_international() ? 'international' : 'domestic');
        return parent::get_params();
    }


    public function info_params()
    {
        $international = array(
            'authToken',
            'mailClass',
            'weightOz',
            'sender', // @TODO array
            'recipient', // @TODO array
            'insuredValue',
            'customsInfo',
            'customsItem',
            'labelType',
            'imageFormat',
        );

        $domestic = array(
            'authToken',
            'mailClass',
            'weightOz',
            'description',
            'service',
            'sender',
            'recipient',
            'insuredValue',
            'dimensionalWeight',
            'labelType',
            'imageFormat',
        );

        return ($this->is_international() ? $international : $domestic);

    }

}