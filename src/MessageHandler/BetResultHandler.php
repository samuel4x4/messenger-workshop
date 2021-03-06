<?php

namespace App\MessageHandler;

use App\Message\GameResultMessage;
use Symfony\Component\Messenger\Handler\MessageSubscriberInterface;

class BetResultHandler implements MessageSubscriberInterface
{
    public function handleResult($message)
    {
        echo $message->bet->user." ".get_class($message)."<br>";
    }

    public static function getHandledMessages(): iterable
    {
        yield GameResultMessage::class => [
            'method' => 'handleResult',
            'bus' => 'event_bus',
        ];
    }
}
