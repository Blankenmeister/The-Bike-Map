<?php

namespace src\Services;

use src\Models\Role;

trait Hydratation
{

  public function __construct(array $data = array())
  {
    $this->hydrate($data);
  }

  // private function hydrate(array $data): void
  // {
  //   foreach ($data as $key => $value) {
      
      
  //     $parts = explode('_', $key);
  //     // var_dump($parts);
  //     $setter = 'set';
  //     foreach ($parts as $part) {
  //       if ($part =='role') {
  //         var_dump($value);
  //         $role = new Role();
          
  //         $role->setIdRole($value['Id_role']);
  //         $role->setName($value['name']);
  //         $this->setRole($role);
  //         // var_dump($role);
          

  //       }
  //       else {
  //         $setter.= ucfirst(strtolower($part));
  //       }
       
  //     }

  //     if (method_exists($this, $setter)) 
  //     {
  //       $this->$setter($value);
  //     }
  //   }
  // }



  private function hydrate(array $data): void
  {
    foreach ($data as $key => $value) {
      
      
      $parts = explode('_', $key);
      // var_dump($parts);
      $setter = 'set';
      foreach ($parts as $part) {
        if ($part =='role') {
          // var_dump($value);
          // $role = new Role();
        
          // $role->setName($value);
          // $this->setRole($role);
          // var_dump($role);
          // die;
          

        }
        else {
          $setter.= ucfirst(strtolower($part));
        }
       
      }

      if (method_exists($this, $setter)) 
      {
        $this->$setter($value);
      }
    }
  }

 

 

  public function __set($name, $value)
  {
    $this->hydrate([$name => $value]);
  }

  public function __serialize(): array
  {
    $class = new \ReflectionClass(get_class($this));

    $ObjToArray = [];
    foreach ($class->getMethods(\ReflectionMethod::IS_PUBLIC) as $methode) {
      $methodeName = $methode->getName();
      if (strpos($methodeName, 'get') === 0) {
        $ObjToArray[$methodeName] = $this->$methodeName();
      }
    }
    return $ObjToArray;
  }

  public function __unserialize(array $data): void
  {
    $this->hydrate($data);
  }
}
