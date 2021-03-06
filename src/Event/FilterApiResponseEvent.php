<?php

namespace KnpU\LoremIpsumBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FilterApiResponseEvent extends Event
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

}