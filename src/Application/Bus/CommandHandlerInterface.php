<?php declare(strict_types=1);

namespace SaaSFormation\Framework\Contracts\Application\Bus;

use SaaSFormation\Framework\Contracts\Domain\DomainEventStream;

interface CommandHandlerInterface
{
    /**
     * @template C of CommandInterface
     *
     * @param C $command
     * @return DomainEventStream
     */
    public function handle($command): DomainEventStream;
}