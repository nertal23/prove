<?php
namespace Prove\Example\Cron;

class Message {
    protected $_logger;

    public function __construct(\Psr\Log\LoggerInterface $logger) {
        $this->_logger = $logger;
    }

    public function execute() {
    	$this->_logger->info('Module installed with composer!');
    }
}
