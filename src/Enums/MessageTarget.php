<?php

namespace NotificationChannels\Fcm\Enums;

enum MessageTarget: string
{
    case Unknown = 'unknown';
    
    case Condition = 'condition';

    case Token = 'token';

    case  Topic = 'topic';
}
