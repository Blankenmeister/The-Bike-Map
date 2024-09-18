<?php

namespace src\Models;

use DateTime;
use src\Services\Hydratation;

class User
{

  private int $Id_user;
  private string $last_name;
  private string $first_name;
  private string $email;
  private string $password;
  private DateTime $rgpd;
  private Role $role;
  private Favourite $favourite;
  private Like $like;
  private Comment $comment;


  use Hydratation;

  

  /**
   * Get the value of Id_user
   */
  public function getIdUser(): int
  {
    return $this->Id_user;
  }

  /**
   * Set the value of Id_user
   */
  public function setIdUser(int $Id_user): self
  {
    $this->Id_user = $Id_user;

    return $this;
  }

  /**
   * Get the value of last_name
   */
  public function getLastName(): string
  {
    return $this->last_name;
  }

  /**
   * Set the value of last_name
   */
  public function setLastName(string $last_name): self
  {
    $this->last_name = $last_name;

    return $this;
  }

  /**
   * Get the value of first_name
   */
  public function getFirstName(): string
  {
    return $this->first_name;
  }

  /**
   * Set the value of first_name
   */
  public function setFirstName(string $first_name): self
  {
    $this->first_name = $first_name;

    return $this;
  }

  /**
   * Get the value of email
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * Set the value of password
   */
  public function setPassword(string $password): self
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of rgpd
   */
  public function getRgpd(): DateTime
  {
    return $this->rgpd;
  }

  /**
   * Set the value of rgpd
   */
  public function setRgpd(DateTime $rgpd): self
  {
    $this->rgpd = $rgpd;

    return $this;
  }

  /**
   * Get the value of role
   */
  public function getRole(): Role
  {
    return $this->role;
  }

  /**
   * Set the value of role
   */
  public function setRole(Role $role): self
  {
    $this->role = $role;

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
