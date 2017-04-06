<?php

namespace App2\Command;

class ArrayStart extends AbstractStart
{
    public function get($data)
    {
        parent::get($data);

        return $this->format->getArray();
    }
}