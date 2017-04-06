<?php

namespace App\Command;

use App\Contracts\FormatContract;

abstract class AbstractStart
{
    protected $contract;

    /**
     * AbstractStart constructor.
     * @param FormatContract $contract
     */
    public function __construct(FormatContract $contract)
    {
        $this->contract = $contract;
    }

    /**
     * @return FormatContract
     */
    public function getContract() : FormatContract
    {
        return $this->contract;
    }

    /**
     * @param string $data
     * @return mixed
     */
    abstract public function get(string $data);
}