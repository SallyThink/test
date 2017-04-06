<?php

namespace App2;

use App2\Command\AbstractStart;

class Registry
{
    /** @var AbstractStart[] $test */
    protected $all;

    /**
     * @param $type
     * @param AbstractStart $start
     */
    public function add($type, AbstractStart $start)
    {
        $this->all[$type] = $start;
    }

    /**
     * @param $type
     * @param $data
     */
    public function get($type, $data)
    {
        return $this->all[$type]->get($data);
    }
}