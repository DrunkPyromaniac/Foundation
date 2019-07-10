<?php
/*
 * This file is part of the PommProject/ModelManager package.
 *
 * (c) 2014 - 2015 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\Foundation;

class QueryBuilder
{
    protected $query;
    protected $args;

    public function __construct(string $query, ...$args)
    {
        $this->query = $query;
        $this->args  = $args;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getValues(): array
    {
        return $this->args ?? [];
    }
}
