<?php

namespace src\Models;

use DateTime;

class Route {
    
    private $Id_route;
    private $name;
    private $description;
    private $duration;
    private $distance;
    private $elevation;
    private $altitude;
    private $circuit;
    private $crestion_date;
    private $map_link;

    public function __construct($Id_route, $name, $description, $duration, $distance, $elevation, $altitude, $circuit, $crestion_date,
    $map_link)
    {
        $this->Id_route = $Id_route;
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->distance = $distance;
        $this->elevation = $elevation;
        $this->altitude = $altitude;
        $this->circuit = $circuit;
        $this->crestion_date = $crestion_date;
        $this->map_link = $map_link;
    }

    /**
     * Get the value of Id_route
     */
    public function getIdRoute()
    {
        return $this->Id_route;
    }

    /**
     * Set the value of Id_route
     */
    public function setIdRoute($Id_route): self
    {
        $this->Id_route = $Id_route;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     */
    public function setDuration($duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of distance
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     */
    public function setDistance($distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of elevation
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Set the value of elevation
     */
    public function setElevation($elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude($altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of circuit
     */
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     */
    public function setCircuit($circuit): self
    {
        $this->circuit = $circuit;

        return $this;
    }

    /**
     * Get the value of crestion_date
     */
    public function getCrestionDate()
    {
        return $this->crestion_date->format('Y-m-d');
        
    }

    /**
     * Set the value of crestion_date
     */
    public function setCrestionDate(DateTime $crestion_date): self
    {
        $this->crestion_date = $crestion_date;

        return $this;
    }

    /**
     * Get the value of map_link
     */
    public function getMapLink()
    {
        return $this->map_link;
    }

    /**
     * Set the value of map_link
     */
    public function setMapLink($map_link): self
    {
        $this->map_link = $map_link;

        return $this;
    }
}