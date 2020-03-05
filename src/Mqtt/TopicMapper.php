<?php

declare(strict_types=1);

namespace Fbns\Client\Mqtt;

interface TopicMapper
{
    public function map(string $topic): string;

    public function unmap(string $id): string;
}
