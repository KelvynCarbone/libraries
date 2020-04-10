<?php
namespace App\Libraries;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

class CustomLog {

    private $fileName = "customlog.log";

    public function __construct($name) {
        $this->fileName = $name.".log";
    }

    public function create($content, $type="info") {

        // logger instance
        $log = new Logger('kelvyn');
        // handler init, making days separated logs
        $handler = new RotatingFileHandler(storage_path().'/logs/'.$this->fileName, 0, Logger::INFO);
        // formatter, ordering log rows
        $handler->setFormatter(new LineFormatter("[%datetime%] %channel%.%level_name%: %message% %extra% %context%\n", null, true, true));
        // add handler to the logger
        $log->pushHandler($handler);

        if($type=="info")
            $log->addInfo($content);
        else if($type=="debug")
            $log->addDebug($content);
        else if($type=="error")
            $log->addError($content);
        else if($type=="warning")
            $log->addWarning($content);
    }

}
