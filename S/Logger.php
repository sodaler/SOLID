<?php

/**
 * Логирование сообщений, 1 обязанность
 */
class Logger
{
    public function log($message) {
        // ...
        $this->saveToFile($message);
    }
}