<?php

namespace BlackOps;

class jugador 
{
    protected $id;
    protected $name;

    public function __construct($id ,$name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function GetID()
    {
        return $this->id;
    }

    public function GetName()
    {
        return $this->name;
    }
}

