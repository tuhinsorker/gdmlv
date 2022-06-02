<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Modules\Role\Entities\Role;

class UserRole extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function role(){
        return $this->hasMany(Role::class);
    }
    
    
}
