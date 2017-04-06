<?php

namespace App\Command;


class Start extends AbstractStart
{
    /**
     * @param string $data
     * @return mixed
     */
    public function get(string $data)
    {
        return $this->getContract()->format($data);
    }
}