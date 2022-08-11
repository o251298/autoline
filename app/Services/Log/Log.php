<?php

namespace App\Services\Log;
use Psr\Log\LoggerInterface;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log implements LoggerInterface
{
    private LoggerInterface $logger;

    protected function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public static function channel($channelName)
    {
        $config = require '../config/logger.php';
        $path = $config['channel'][$channelName];
        $log = new Logger($channelName);
        $log->pushHandler(new StreamHandler($path, Level::Warning));
        return new self($log);
    }

    public function emergency(\Stringable|string $message, array $context = []): void
    {
        $this->logger->emergency($message, $context);
    }

    public function alert(\Stringable|string $message, array $context = []): void
    {
        $this->logger->alert($message, $context);
    }

    public function critical(\Stringable|string $message, array $context = []): void
    {
        $this->logger->critical($message, $context);
    }

    public function error(\Stringable|string $message, array $context = []): void
    {
        $this->logger->error($message, $context);
    }

    public function warning(\Stringable|string $message, array $context = []): void
    {
        $this->logger->warning($message, $context);
    }

    public function notice(\Stringable|string $message, array $context = []): void
    {
        $this->logger->notice($message, $context);
    }

    public function info(\Stringable|string $message, array $context = []): void
    {
        $this->logger->info($message, $context);
    }

    public function debug(\Stringable|string $message, array $context = []): void
    {
        $this->logger->debug($message, $context);
    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $this->logger->log($message, $context);
    }
}