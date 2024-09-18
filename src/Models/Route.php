<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class Route {
    
    private int $Id_route;
    private string $name;
    private string $description;
    private DateTime $duration;
    private float $distance;
    private int $elevation;
    private int $altitude;
    private bool $circuit;
    private DateTime $creation_date;
    private string $map_link;
    private Type $type;
    private Level $level;
    private User $user;
    private Favourite $favourite;
    private Like $like;
    private Comment $comment;

    use Hydratation;

  

    /**
     * Get the value of Id_route
     */
    public function getIdRoute(): int
    {
        return $this->Id_route;
    }

    /**
     * Set the value of Id_route
     */
    public function setIdRoute(int $Id_route): self
    {
        $this->Id_route = $Id_route;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
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

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of duration
     */
    public function getDuration(): DateTime
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     */
    public function setDuration(DateTime $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of distance
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * Set the value of distance
     */
    public function setDistance(float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get the value of elevation
     */
    public function getElevation(): int
    {
        return $this->elevation;
    }

    /**
     * Set the value of elevation
     */
    public function setElevation(int $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get the value of altitude
     */
    public function getAltitude(): int
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     */
    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of circuit
     */
    public function isCircuit(): bool
    {
        return $this->circuit;
    }

    public function getCircuit(): bool
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     */
    public function setCircuit(bool $circuit): self
    {
        $this->circuit = $circuit;

        return $this;
    }

    /**
     * Get the value of creation_date
     */
    public function getCreationDate(): DateTime
    {
        return $this->creation_date;
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
    public function getMapLink(): string
    {
        return $this->map_link;
    }

    /**
     * Set the value of map_link
     */
    public function setMapLink(string $map_link): self
    {
        $this->map_link = $map_link;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of level
     */
    public function getLevel(): Level
    {
        return $this->level;
    }

    /**
     * Set the value of level
     */
    public function setLevel(Level $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get the value of user
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of favourite
     */
    public function getFavourite(): Favourite
    {
        return $this->favourite;
    }

    /**
     * Set the value of favourite
     */
    public function setFavourite(Favourite $favourite): self
    {
        $this->favourite = $favourite;

        return $this;
    }

    /**
     * Get the value of like
     */
    public function getLike(): Like
    {
        return $this->like;
    }

    /**
     * Set the value of like
     */
    public function setLike(Like $like): self
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get the value of comment
     */
    public function getComment(): Comment
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     */
    public function setComment(Comment $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function transformObjectToArray()
    {
      return get_object_vars($this);
    }
}