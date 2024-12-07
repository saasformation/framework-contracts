<?php

namespace SaaSFormation\Framework\Contracts\Application\Bus;

interface QueryHandlerInterface
{
    /**
     * @template Q of QueryInterface
     *
     * @param Q $query
     * @return QueryResultInterface
     */
    public function ask($query): QueryResultInterface;
}