<?php

namespace App2\Command;

class HtmlStart extends AbstractStart
{
    public function get($data)
    {
        parent::get($data);

        return $this->format->getHtml();
    }
}