<?php

namespace App2\Command;

use App2\Format\FormatContract;

abstract class AbstractStart
{
    protected $format;

    public function __construct(FormatContract $format)
    {
        $this->format = $format;
    }

    public function get($data)
    {
        $this->format->format($data);
    }
}