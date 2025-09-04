<?php

return [

    'telegram' => [
        'api_token' => '',
        'bot_username' => '',
        'channel_username' => '', // Channel username to send message
        'channel_signature' => '', // This will be assigned in the footer of message
        'proxy' => false,   // True => Proxy is On | False => Proxy Off
    ],

    'twitter' => [
        'consurmer_key' => '',
        'consurmer_secret' => '',
        'access_token' => '',
        'access_token_secret' => ''
    ],

    'facebook' => [
        'app_id' => '209715159947241',
        'app_secret' => '63ebb370e47c173cc98dc16f54ffd693',
        'default_graph_version' => 'v2.3',
        'page_access_token' => 'EAACZBvB2c1ZBkBANyLeVIYqBCdEEStm9Ygf0nITdQZBypN4qxwBgzLIrAnUuX3QBTuoXpsJEPq6Dparg79Fpq52peme0R0INfzWzpzQyVU7Wpy3USQblMPSiobCwvYu6DgwacMzvxR9ZAuK3MtSmlOyGKf6Rq15utwkZBzSE97JbadvTPiF4OzlRP1gZALpphGY5CI1lF3PQZDZD'
    ],

    // Set Proxy for Servers that can not Access Social Networks due to Sanctions or ...
    'proxy' => [
        'type' => '',   // 7 for Socks5
        'hostname' => '', // localhost
        'port' => '' , // 9050
        'username' => '', // Optional
        'password' => '', // Optional
    ]
];
