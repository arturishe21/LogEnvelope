<?php

return [

    /*
     * Logging drivers.
     */
    'drivers' => [
        'mail' => [
            'enabled' => false,
            'to' => [
                // 'email@example.com',
            ],
            'from_name'  => 'Log Envelope',
            'from_email' => '',
        ],
        
        'telegram' => [
            'enabled' => false,
            'token'   => env('LOGENVELOPE_TELEGRAM_TOKEN'),
            'chats'   => [
                // telegram user id
            ],
        ],
        
        'slack' => [
            'enabled'  => false,
            'username' => 'Log Envelope',
            'channel'  => '#logenvelope', // create channel
            'token'    => env('LOGENVELOPE_SLACK_TOKEN'),  //this need generate token https://api.slack.com/docs/oauth-test-tokens
        ],
        
        'database' => [
            'enabled' => false,
            'model'   => Yaro\LogEnvelope\Models\ExceptionModel::class,
        ],
    ],
    
    /*
     * Change config for LogEnvelope execution.
     */
    'force_config' => [
        'mail.driver' => 'mail',
        'queue.default' => 'sync',
    ],

    /*
     * How many lines to show before exception line and after.
     */
    'lines_count' => 6,

    /*
     * List of exceptions to skip sending.
     */
    'except' => [
        //'Exception',
        'Symfony\Component\HttpKernel\Exception\NotFoundHttpException',
        'Symfony\Component\Process\Exception\ProcessTimedOutException',
    ],

];
