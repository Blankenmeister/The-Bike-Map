<?php
namespace src\Services;

class Routing
{
  public static function routeComposee()
  {
    $route = $_SERVER['REDIRECT_URL'];

    $route = ltrim($route, HOME_URL);
    $route = rtrim($route, '/');
    $route = explode('/', $route);

    for($i=sizeof($route); $i < 4 ; $i ++) {
      $route[$i] = null;
    }

    return $route;
  }

  public static function slugToTitle(string $slug): string
  {
    $title = ucfirst(str_replace('_',' ', $slug));
    return $title;
  }

  public static function titleToSlug(string $title): string
  {
    $slug = strtolower(str_replace(' ', '_', $title));
    return $slug;
  }
}