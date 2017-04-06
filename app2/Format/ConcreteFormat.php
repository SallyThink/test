<?php

namespace App2\Format;

class ConcreteFormat implements FormatContract
{
    protected $array;
    protected $html;

    public function format($data)
    {
        $this->array = array($data);
        $this->html = '<div>' . $data . '</div>';
    }

    public function getArray()
    {
        return $this->array;
    }

    public function getHtml()
    {
        return $this->html;
    }
}