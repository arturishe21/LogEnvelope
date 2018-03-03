<?php

namespace Yaro\LogEnvelope\Drivers;

class DriverFactory
{
    public static function create($driver, $data)
    {
        switch ($driver) {
            case 'mail':
                return new Mail($data);

            case 'database':
                return new Database($data);

            case 'telegram':
                return new Telegram($data);

            case 'slack':
                return new Slack($data);

            default:
                return new Dummy($data);
        }
    }

    // end create
}
