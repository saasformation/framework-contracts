<?php

namespace SaaSFormation\Framework\Contracts\UI\HTTP;

trait PageableResponseBody
{
    private int $page;
    private int $perPage;
    private int $totalResults;
    private int $totalPages;

    public function initializePageableResponseBody(
        int $page,
        int $perPage,
        int $totalResults,
        int $totalPages
    ): void
    {
        $this->page = $page;
        $this->perPage = $perPage;
        $this->totalResults = $totalResults;
        $this->totalPages = $totalPages;
    }

    public function page(): int
    {
        return $this->page;
    }

    public function perPage(): int
    {
        return $this->perPage;
    }

    public function totalResults(): int
    {
        return $this->totalResults;
    }

    public function totalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @return array{'page': int, 'per_page': int, 'total_results': int, 'total_pages': int}
     */
    public function paginationArray(): array
    {
        return [
            'page' => $this->page,
            'per_page' => $this->perPage,
            'total_results' => $this->totalResults,
            'total_pages' => $this->totalPages,
        ];
    }
}