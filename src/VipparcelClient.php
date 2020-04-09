<?php

namespace stoyanov\vipparcel;

use stoyanov\vipparcel\request\VipparcelRequest;
use stoyanov\vipparcel\VipparcelException;

class VipparcelClient {

    // @TODO version, url, authToken in config

    const URL_PRODUCTION = 'https://vipparcel.com/api/v1';
    const URL_TEST = 'https://vipparcel.com/api-test/v1';

    protected $_request;
    protected $_auth_token;
    protected $_is_test = FALSE;

    public function auth_token($value)
    {
        $this->_auth_token = $value;
        return $this;
    }

    public function is_test($value)
    {
        $this->_is_test = (bool) $value;
        return $this;
    }

    public function request(VipparcelRequest $request)
    {
        $this->_request = $request;
        return $this;
    }

    protected function _client_url()
    {
        if ($this->_is_test === TRUE) {
            return self::URL_TEST;
        }
        return self::URL_PRODUCTION;
    }

    protected function _default_params()
    {
        if ( ! $auth_token = $this->_auth_token) {
            throw new VipparcelException('Required parameter not passed: authToken');
        }
        return array('authToken' => $auth_token);
    }

    public function execute()
    {
        if ($this->_request === NULL) {
            throw new VipparcelException('Request object does not exist');
        }

        $request_method = $this->_request->get_method();
        $request_url = $this->_request->get_url();
        $send_params = array_merge($this->_default_params(), $this->_request->get_params());
        $http_client = new \Guzzle\Http\Client();
        $http_client->setSslVerification(true);
        $http_client->getEventDispatcher()->addListener('request.error', function(\Guzzle\Common\Event $event) {
            if ($event['response']->getStatusCode() != 200) {
                $event->stopPropagation();
            }
        });

        $full_url = $this->_client_url().$request_url;

        if (in_array($request_method, array('put', 'post')))
        {
            $response = $http_client->$request_method($full_url, array('content-type' => 'application/x-www-form-urlencoded'), $send_params);
        }
        else
        {
            $response = $http_client->$request_method($full_url.'?'.http_build_query($send_params), array('content-type' => 'application/x-www-form-urlencoded'));
        }
        return new VipparcelResponse($response->send());
    }

}
