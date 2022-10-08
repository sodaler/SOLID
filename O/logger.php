<?php

class LoggerFile implements LoggerInterface {
    private function saveToFile($message) {
        //...
    }

    public function log($message) {
        //...
        $this->saveToFile($message);
    }
}

class LoggerDb implements LoggerInterface {
    private function saveToDb($message) {
        //...
    }

    public function log($message) {
        //...
        $this->saveToDb($message);
    }
}