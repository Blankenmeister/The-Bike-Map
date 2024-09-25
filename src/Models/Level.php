<?php

namespace src\Models;


use src\Services\Hydratation;

class Level {
    
    private ?int $Id_level = null;
    private ?string $name = null;


    use Hydratation;



    /**
     * Get the value of Id_level
     */
    public function getIdLevel(): ?int
    {
        return $this->Id_level;
    }

    /**
     * Set the value of Id_level
     */
    public function setIdLevel(int $Id_level): self
    {
        $this->Id_level = $Id_level;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    // public function transformObjectToArray()
    // {
    //   return get_object_vars($this);
    // }


}