<?php

namespace NotificationChannels\Fcm\Exceptions;

use Exception;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\Message;
use NotificationChannels\Fcm\Enums\MessageTarget;

class CouldNotSendNotification extends Exception
{
    public static function serviceRespondedWithAnError(MessagingException $exception)
    {
        return new static(
            $exception->getMessage(),
            $exception->getCode(),
            $exception
        );
    }

    public static function invalidMessage()
    {
        return new static('The toFcm() method only accepts instances of '.Message::class);
    }

    public static function invalidPropertyInArray($key)
    {
        return new static('The value of '.$key.' must be a string');
    }

    public static function invalidTopic()
    {
        return new static('A topic must be a non-empty string');
    }

    public static function unsupportedMessageTarget()
    {
        return new static('The value of routeNotificationTarget method must be an instance of '.MessageTarget::class);
    }
}
