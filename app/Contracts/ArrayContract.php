<?php

namespace App\Contracts;

class ArrayContract implements FormatContract
{
    /**
     * @param string $data
     * @return array
     */
    public function format(string $data) : array
    {
        return array($data);
    }
}