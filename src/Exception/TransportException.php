<?php

declare(strict_types=1);

namespace Piloterr\Exception;

/**
 * The request failed before a complete HTTP response was received.
 */
final class TransportException extends PiloterrException
{
    public function __construct(string $message, \Throwable $previous)
    {
        parent::__construct($message . ' ' . $previous->getMessage(), 0, $previous);
    }
}
