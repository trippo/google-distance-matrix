<?php

namespace CiroVargas\GoogleDistanceMatrix\Response;

class Row
{
    /**
     * @var array
     */
    private $elements;

    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }
}
