<?php

namespace src\Services;

use src\Repositories\LevelRepository;
use src\Repositories\TypeRepository;

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

      switch ($key) {
        case "Id_type":
          $typeRepository = new TypeRepository();
          $relatedType = $typeRepository->getTypeById($value);

          if ($relatedType) {
            $this->setType($relatedType);
          }
          break;
        case "Id_level":
          $levelRepository = new LevelRepository();
          $relatedLevel = $levelRepository->getLevelById($value);

          if ($relatedLevel) {
            $this->setLevel($relatedLevel);
          }
          break;
        default:
          foreach ($parts as $part) {
            $setter .= ucfirst(strtolower($part));
          }
          
          if (method_exists($this, $setter)) {
            $this->$setter($value);
          }
          break;
      }
    }
  }
}

