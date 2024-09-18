<?php

namespace src\Models;


use src\Services\Hydratation;

class Type {
    
    private ?int $Id_type = null;
    private ?string $name = null;
    

    use Hydratation;


    /**
     * Get the value of Id_type
     */
    public function getIdType(): ?int
    {
        return $this->Id_type;
    }

    /**
     * Set the value of Id_type
     */
    public function setIdType(int $Id_type): self
    {
        $this->Id_type = $Id_type;

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


    public function transformObjectToArray()
    {
      return get_object_vars($this);
    }


}