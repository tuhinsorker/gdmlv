<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\Role\Entities\SubModule;

class Module extends Model
{
    use HasFactory;
    
    public function subModules(){
        return $this->hasMany(SubModule::class);
    }

    public function subModule(){
       return $this->hasOne(SubModule::class);

    }
}
