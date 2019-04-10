<?php

namespace Woo\GridView\DataProviders;

interface DataProviderInterface
{
    /**
     * Should return total amount of rows
     * @return int
     */
    public function getCount() : int;

    /**
     * Should return amount of pages
     * @param int $perPage - amount of records per page
     * @return int
     */
    public function getTotalPages(int $perPage) : int;

    /**
     * Should return a list of data for current page
     * @param array $filters
     * @param string $orderBy
     * @param string $orderSort
     * @param int $page
     * @param int $perPage - amount of records per page
     * @return mixed
     */
    public function getData(array $filters, string $orderBy, string $orderSort, int $page, int $perPage);
}