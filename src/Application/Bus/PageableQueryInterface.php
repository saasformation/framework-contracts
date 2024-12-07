<?php

namespace SaaSFormation\Framework\Contracts\Application\Bus;

interface PageableQueryInterface
{
    public function page(): int;
    public function perPage(): int;
}