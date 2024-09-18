<?php

namespace src\Models;


use src\Services\Hydratation;

class Comment {
    
    private int $Id_comment;
    private string $text;
    private User $user;
    private Route $route;



    use Hydratation;


}