<?php

namespace App\Contracts;

class HtmlContract implements FormatContract
{
    /**
     * @param string $data
     * @return string
     */
    public function format(string $data) : string
    {
        return '<div>' . $data . '</div>';
    }
}