<?php

namespace SaaSFormation\Framework\Contracts\UI\HTTP;

interface PageableResponseBodyInterface
{
    public function page(): int;
    public function perPage(): int;
    public function totalResults(): int;
    public function totalPages(): int;
    /**
     * @return array{'page': int, 'per_page': int, 'total_results': int, 'total_pages': int}
     */
    public function paginationArray(): array;
}