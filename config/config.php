<?php

return array(
    array(
        'name'       => '[ GOOGLE URL ]',
        'type'       => 'api_curl_get',
        'needResult' => false,
        'config'     => array(
            'url'    => env('GOOGLE_URL'),
            'param'  => array(),
            'method' => 'get',
        )
    )
);
