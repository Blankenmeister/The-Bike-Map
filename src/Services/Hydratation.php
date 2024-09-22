<?php

namespace src\Services;

trait Hydratation
{
  public function __construct(array $data = array())
  {
    $this->hydrate($data);
  }

  public function __set($name, $value)
  {
    $this->hydrate([$name => $value]);
  }

  private function hydrate(array $data): void
  {
    foreach ($data as $key => $value) {
      $parts = explode('_', $key);
      $setter = 'set';

      foreach ($parts as $part) {
        $setter .= ucfirst(strtolower($part));
      }

      if (method_exists($this, $setter)) {
        $this->$setter($value);
      }
    }
  }
}
