<?php

namespace SaaSFormation\Framework\Contracts\Application\Bus;

interface PageableQueryResultInterface
{
    public function page(): int;
    public function perPage(): int;
    public function totalResults(): int;
    public function totalPages(): int;
}