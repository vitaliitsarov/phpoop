<?php

class Message
{
    public function formatMessage($message)
    {
        return "<i>{$message}</i>";
    }
}

class BoldMessage extends Message
{
    public function formatMessage($message, $age)
    {
        return "<b>{$message} - {$age}</b>";
    }
}

$message = new Message();
echo $message->formatMessage('Hello World'); // prints '<i>Hello World</i>'
 
$message = new BoldMessage();
echo $message->formatMessage('Hello World'); // prints '<b>Hello World</b>'