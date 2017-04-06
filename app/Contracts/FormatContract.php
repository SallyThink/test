<?php

namespace App\Contracts;

interface FormatContract
{
    /**
     * @param string $data
     * @return mixed
     */
    public function format(string $data);
}