<?php declare(strict_types=1);

namespace SaaSFormation\Framework\Contracts\Application\ReadModel;

abstract class ReadModel
{
    /**
     * @return array<mixed>
     */
    public abstract function toArray(): array;

    /**
     * @param array<mixed> $data
     * @return static
     */
    public static abstract function fromArray(array $data): static;
    public static abstract function code(): string;
}