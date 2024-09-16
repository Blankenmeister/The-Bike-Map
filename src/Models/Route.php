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
    private $creation_date;
    private $map_link;
    private $Id_type;
    private $typeName;
    private $Id_level;
    private $levelName;
    private $Id_user;
    private $Id_favourite;
    private $Id_like;
    private $Id_comment;


    public function __construct($Id_route, $name, $description, $duration, $distance, $elevation, $altitude, $circuit, $creation_date,
    $map_link, $Id_type, $typeName, $levelName, $Id_level, $Id_user, $Id_favourite, $Id_like, $Id_comment)
    {
        $this->Id_route = $Id_route;
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->distance = $distance;
        $this->elevation = $elevation;
        $this->altitude = $altitude;
        $this->circuit = $circuit;
        $this->creation_date = $creation_date;
        $this->map_link = $map_link;
        $this->Id_type = $Id_type;
        $this->typeName = $typeName;
        $this->Id_level = $Id_level;
        $this->levelName = $levelName;
        $this->Id_user = $Id_user;
        $this->Id_favourite = $Id_favourite;
        $this->Id_like = $Id_like;
        $this->Id_comment = $Id_comment;

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
     * Get the value of creation_date
     */
    public function getCreationDate()
    {
        return $this->creation_date->format('Y-m-d');
        
    }

    /**
     * Set the value of creation_date
     */
    public function setCreationDate(DateTime $creation_date): self
    {
        $this->creation_date = $creation_date;

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

    /**
     * Get the value of Id_type
     */
    public function getIdType()
    {
        return $this->Id_type;
    }

    /**
     * Set the value of Id_type
     */
    public function setIdType($Id_type): self
    {
        $this->Id_type = $Id_type;

        return $this;
    }

    /**
     * Get the value of Id_level
     */
    public function getIdLevel()
    {
        return $this->Id_level;
    }

    /**
     * Set the value of Id_level
     */
    public function setIdLevel($Id_level): self
    {
        $this->Id_level = $Id_level;

        return $this;
    }

    /**
     * Get the value of Id_user
     */
    public function getIdUser()
    {
        return $this->Id_user;
    }

    /**
     * Set the value of Id_user
     */
    public function setIdUser($Id_user): self
    {
        $this->Id_user = $Id_user;

        return $this;
    }

    /**
     * Get the value of Id_favourite
     */
    public function getIdFavourite()
    {
        return $this->Id_favourite;
    }

    /**
     * Set the value of Id_favourite
     */
    public function setIdFavourite($Id_favourite): self
    {
        $this->Id_favourite = $Id_favourite;

        return $this;
    }

    /**
     * Get the value of Id_like
     */
    public function getIdLike()
    {
        return $this->Id_like;
    }

    /**
     * Set the value of Id_like
     */
    public function setIdLike($Id_like): self
    {
        $this->Id_like = $Id_like;

        return $this;
    }

    /**
     * Get the value of Id_comment
     */
    public function getIdComment()
    {
        return $this->Id_comment;
    }

    /**
     * Set the value of Id_comment
     */
    public function setIdComment($Id_comment): self
    {
        $this->Id_comment = $Id_comment;

        return $this;
    }

    /**
     * Get the value of typeName
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set the value of typeName
     */
    public function setTypeName($typeName): self
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * Get the value of levelName
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * Set the value of levelName
     */
    public function setLevelName($levelName): self
    {
        $this->levelName = $levelName;

        return $this;
    }
}