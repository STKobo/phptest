<?php 

class Logger 
{
    public function log(string $message): void
    {
        file_put_contents(filename: date(format: 'Y-m-d'). '.log', data: $message.PHP_EOL, flags:FILE_APPEND);
    }
}