<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $permissions;
    public $perfil;
    
    public static function getPermissions(){
        return $permissions = 'permissions';
    }

    public static function getPerfil(){
        return $perfil = 'perfil';
    }

}
